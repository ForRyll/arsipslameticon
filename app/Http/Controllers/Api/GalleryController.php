<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Public: Ambil semua galeri beserta kategorinya
     */
    public function index(): JsonResponse
    {
        $galleries = Gallery::with('category')
            ->orderBy('display_order', 'asc')
            ->latest()
            ->get();

        return response()->json([
            'status' => 'success',
            'data'   => $galleries,
        ]);
    }

    /**
     * Public: Detail galeri
     */
    public function show(string $id): JsonResponse
    {
        $gallery = Gallery::with('category')->findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data'   => $gallery,
        ]);
    }

    /**
     * Protected: Tambah galeri baru
     */
    public function store(StoreGalleryRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('galleries', 'public');
            $data['img_url'] = Storage::url($path);
        }

        $gallery = Gallery::create($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Item galeri berhasil ditambahkan.',
            'data'    => $gallery->load('category'),
        ], 201);
    }

    /**
     * Protected: Update galeri
     */
    public function update(StoreGalleryRequest $request, string $id): JsonResponse
    {
        $gallery = Gallery::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($gallery->img_url) {
                $oldPath = str_replace('/storage/', '', $gallery->img_url);
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('image')->store('galleries', 'public');
            $data['img_url'] = Storage::url($path);
        }

        $gallery->update($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Item galeri berhasil diperbarui.',
            'data'    => $gallery->load('category'),
        ]);
    }

    /**
     * Protected: Hapus galeri
     */
    public function destroy(string $id): JsonResponse
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->img_url) {
            $oldPath = str_replace('/storage/', '', $gallery->img_url);
            Storage::disk('public')->delete($oldPath);
        }

        $gallery->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Item galeri berhasil dihapus.',
        ]);
    }
}