<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    /**
     * Public: Ambil semua kategori produk
     */
    public function index()
    {
        $categories = ProductCategory::latest()->get();

        return response()->json([
            'status' => 'success',
            'data'   => $categories
        ]);
    }

    /**
     * Public: Detail kategori produk
     */
    public function show(string $id)
    {
        $category = ProductCategory::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data'   => $category
        ]);
    }

    /**
     * Protected: Tambah kategori produk baru
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $data = $request->validated();
        
        // Buat slug otomatis dari name jika tidak diisi
        $data['slug'] = !empty($data['slug']) ? Str::slug($data['slug']) : Str::slug($data['name']);

        $category = ProductCategory::create($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Kategori produk berhasil ditambahkan.',
            'data'    => $category
        ], 201);
    }

    /**
     * Protected: Update kategori produk
     */
    public function update(StoreProductCategoryRequest $request, string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $data = $request->validated();

        if (isset($data['name'])) {
            $data['slug'] = !empty($data['slug']) ? Str::slug($data['slug']) : Str::slug($data['name']);
        }

        $category->update($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Kategori produk berhasil diperbarui.',
            'data'    => $category
        ]);
    }

    /**
     * Protected: Hapus kategori produk
     */
    public function destroy(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Kategori produk berhasil dihapus.'
        ]);
    }
}