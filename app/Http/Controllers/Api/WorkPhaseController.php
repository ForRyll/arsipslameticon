<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WorkPhase;
use Illuminate\Http\Request;

class WorkPhaseController extends Controller
{
    /**
     * Menampilkan daftar fase kerja (Dapat difilter berdasarkan kategori).
     */
    public function index(Request $request)
    {
        $query = WorkPhase::with('productCategory');

        // Filter berdasarkan product_category_id jika ada (?product_category_id=xxx)
        if ($request->has('product_category_id')) {
            $query->where('product_category_id', $request->query('product_category_id'));
        }

        // Filter berdasarkan slug kategori jika ada (?category_slug=xxx)
        if ($request->has('category_slug')) {
            $query->whereHas('productCategory', function ($q) use ($request) {
                $q->where('slug', $request->query('category_slug'));
            });
        }

        $workPhases = $query->orderBy('display_order', 'asc')->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar fase kerja berhasil diambil.',
            'data'    => $workPhases,
        ], 200);
    }

    /**
     * Menampilkan detail satu fase kerja berdasarkan ID.
     */
    public function show(string $id)
    {
        $workPhase = WorkPhase::with('productCategory')->find($id);

        if (!$workPhase) {
            return response()->json([
                'success' => false,
                'message' => 'Fase kerja tidak ditemukan.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail fase kerja berhasil diambil.',
            'data'    => $workPhase,
        ], 200);
    }

    /**
     * Menyimpan fase kerja baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_category_id' => 'required|exists:product_categories,id',
            'title'               => 'required|string|max:255',
            'description'         => 'nullable|string',
            'display_order'       => 'nullable|integer',
        ]);

        $workPhase = WorkPhase::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Fase kerja berhasil ditambahkan.',
            'data'    => $workPhase->load('productCategory'),
        ], 201);
    }

    /**
     * Memperbarui data fase kerja.
     */
    public function update(Request $request, string $id)
    {
        $workPhase = WorkPhase::find($id);

        if (!$workPhase) {
            return response()->json([
                'success' => false,
                'message' => 'Fase kerja tidak ditemukan.',
            ], 404);
        }

        $validated = $request->validate([
            'product_category_id' => 'sometimes|required|exists:product_categories,id',
            'title'               => 'sometimes|required|string|max:255',
            'description'         => 'nullable|string',
            'display_order'       => 'nullable|integer',
        ]);

        $workPhase->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Fase kerja berhasil diperbarui.',
            'data'    => $workPhase->load('productCategory'),
        ], 200);
    }

    /**
     * Menghapus fase kerja.
     */
    public function destroy(string $id)
    {
        $workPhase = WorkPhase::find($id);

        if (!$workPhase) {
            return response()->json([
                'success' => false,
                'message' => 'Fase kerja tidak ditemukan.',
            ], 404);
        }

        $workPhase->delete();

        return response()->json([
            'success' => true,
            'message' => 'Fase kerja berhasil dihapus.',
        ], 200);
    }
}