<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChooseUsRequest;
use App\Models\ChooseUs;
use Illuminate\Http\JsonResponse;

class ChooseUsController extends Controller
{
    /**
     * Display a listing of active Choose Us items for Public.
     */
    public function index(): JsonResponse
    {
        $items = ChooseUs::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data Why Choose Us berhasil diambil',
            'data'    => $items,
        ], 200);
    }

    /**
     * Display the specified Choose Us item.
     */
    public function show(string $id): JsonResponse
    {
        $item = ChooseUs::find($id);

        if (!$item) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
                'data'    => null,
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Why Choose Us berhasil diambil',
            'data'    => $item,
        ], 200);
    }

    /**
     * Store a newly created Choose Us item (Admin).
     */
    public function store(ChooseUsRequest $request): JsonResponse
    {
        $item = ChooseUs::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Data Why Choose Us berhasil ditambahkan',
            'data'    => $item,
        ], 201);
    }

    /**
     * Update the specified Choose Us item (Admin).
     */
    public function update(ChooseUsRequest $request, string $id): JsonResponse
    {
        $item = ChooseUs::find($id);

        if (!$item) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $item->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Data Why Choose Us berhasil diperbarui',
            'data'    => $item,
        ], 200);
    }

    /**
     * Remove the specified Choose Us item (Admin).
     */
    public function destroy(string $id): JsonResponse
    {
        $item = ChooseUs::find($id);

        if (!$item) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $item->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Why Choose Us berhasil dihapus',
        ], 200);
    }
}