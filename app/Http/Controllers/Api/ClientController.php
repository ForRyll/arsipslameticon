<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Public: Ambil daftar semua client
     */
    public function index()
    {
        $clients = Client::latest()->get();

        return response()->json([
            'status' => 'success',
            'data'   => $clients
        ]);
    }

    /**
     * Public: Detail client
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data'   => $client
        ]);
    }

    /**
     * Protected: Tambah client baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('clients', 'public');
            $validated['logo_url'] = Storage::url($path);
        }

        $client = Client::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Client berhasil ditambahkan.',
            'data'    => $client
        ], 201);
    }

    /**
     * Protected: Update client
     */
    public function update(Request $request, string $id)
    {
        $client = Client::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            if ($client->logo_url) {
                $oldPath = str_replace('/storage/', '', $client->logo_url);
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('logo')->store('clients', 'public');
            $validated['logo_url'] = Storage::url($path);
        }

        $client->update($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Client berhasil diperbarui.',
            'data'    => $client
        ]);
    }

    /**
     * Protected: Hapus client
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);

        if ($client->logo_url) {
            $oldPath = str_replace('/storage/', '', $client->logo_url);
            Storage::disk('public')->delete($oldPath);
        }

        $client->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Client berhasil dihapus.'
        ]);
    }
}