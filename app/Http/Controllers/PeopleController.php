<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\View\View;

class PeopleController extends Controller
{
    public function index(): View
    {
        // Ambil semua data tim beserta relasi jabatannya
        $allMembers = TeamMember::with('position')->get();

        // Cari Founder dengan mengecek string 'founder' atau 'pendiri'
        // Menggunakan raw translation JSON agar tidak terpengaruh app()->getLocale()
        $founder = $allMembers->first(function ($member) {
            if (!$member->position) return false;
            
            // Ambil semua translasi yang tersimpan di kolom 'name' (JSON/Array)
            $translations = $member->position->getTranslations('name') ?? [];
            $rawJson = strtolower(json_encode($translations));

            // Cek apakah mengandung kata 'founder' atau 'pendiri'
            return str_contains($rawJson, 'founder') || str_contains($rawJson, 'pendiri');
        });

        // Ambil sisanya untuk $teams (selain founder) dan urutkan berdasarkan display_order
        $teams = $allMembers
            ->reject(function ($member) use ($founder) {
                return $founder && $member->id === $founder->id;
            })
            ->sortBy('display_order')
            ->values(); // Reset key index array

        return view('our-people', compact('founder', 'teams'));
    }
}