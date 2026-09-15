<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PositionRequest;
use App\Models\Position;
use Illuminate\Http\JsonResponse;

class PositionController extends Controller
{
    /**
     * GET api/positions
     * Menampilkan semua data position.
     */
    public function index(): JsonResponse
    {
        $positions = Position::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data jabatan/position',
            'data'    => $positions,
        ], 200);
    }

    /**
     * POST api/positions
     * Menambah data position baru.
     */
    public function store(PositionRequest $request): JsonResponse
    {
        $position = Position::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Position berhasil ditambahkan',
            'data'    => $position,
        ], 201);
    }

    /**
     * GET api/positions/{id}
     * Menampilkan detail satu data position berdasarkan UUID.
     */
    public function show(Position $position): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail data position',
            'data'    => $position,
        ], 200);
    }

    /**
     * PUT/PATCH api/positions/{id}
     * Memperbarui data position berdasarkan UUID.
     */
    public function update(PositionRequest $request, Position $position): JsonResponse
    {
        $position->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Position berhasil diperbarui',
            'data'    => $position,
        ], 200);
    }

    /**
     * DELETE api/positions/{id}
     * Menghapus data position berdasarkan UUID.
     */
    public function destroy(Position $position): JsonResponse
    {
        $position->delete();

        return response()->json([
            'success' => true,
            'message' => 'Position berhasil dihapus',
        ], 200);
    }
}