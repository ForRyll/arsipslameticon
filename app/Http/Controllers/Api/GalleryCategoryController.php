<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryCategoryRequest;
use App\Models\GalleryCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class GalleryCategoryController extends Controller
{
    /**
     * Public: Ambil semua kategori galeri
     */
    public function index(): JsonResponse
    {
        $categories = GalleryCategory::latest()->get();

        return response()->json([
            'status' => 'success',
            'data'   => $categories,
        ]);
    }

    /**
     * Public: Detail kategori galeri
     */
    public function show(string $id): JsonResponse
    {
        $category = GalleryCategory::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data'   => $category,
        ]);
    }

    /**
     * Protected: Tambah kategori galeri
     */
    public function store(StoreGalleryCategoryRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);

        $category = GalleryCategory::create($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Kategori galeri berhasil ditambahkan.',
            'data'    => $category,
        ], 201);
    }

    /**
     * Protected: Update kategori galeri
     */
    public function update(StoreGalleryCategoryRequest $request, string $id): JsonResponse
    {
        $category = GalleryCategory::findOrFail($id);
        $data = $request->validated();

        if (isset($data['name'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $category->update($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Kategori galeri berhasil diperbarui.',
            'data'    => $category,
        ]);
    }

    /**
     * Protected: Hapus kategori galeri
     */
    public function destroy(string $id): JsonResponse
    {
        $category = GalleryCategory::findOrFail($id);
        $category->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Kategori galeri berhasil dihapus.',
        ]);
    }
}