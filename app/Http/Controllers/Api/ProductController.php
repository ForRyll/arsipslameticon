<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Public: Ambil semua produk beserta relasinya
     */
    public function index(): JsonResponse
    {
        $products = Product::with(['category', 'client'])
            ->orderBy('display_order', 'asc')
            ->latest()
            ->get();

        return response()->json([
            'status' => 'success',
            'data'   => $products,
        ]);
    }

    /**
     * Public: Detail produk
     */
    public function show(string $id): JsonResponse
    {
        $product = Product::with(['category', 'client'])->findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data'   => $product,
        ]);
    }

    /**
     * Protected: Tambah produk baru
     */
    public function store(StoreProductRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['img_url'] = Storage::url($path);
        }

        $product = Product::create($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Produk berhasil ditambahkan.',
            'data'    => $product->load(['category', 'client']),
        ], 201);
    }

    /**
     * Protected: Update produk
     */
    public function update(StoreProductRequest $request, string $id): JsonResponse
    {
        $product = Product::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($product->img_url) {
                $oldPath = str_replace('/storage/', '', $product->img_url);
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('image')->store('products', 'public');
            $data['img_url'] = Storage::url($path);
        }

        $product->update($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Produk berhasil diperbarui.',
            'data'    => $product->load(['category', 'client']),
        ]);
    }

    /**
     * Protected: Hapus produk
     */
    public function destroy(string $id): JsonResponse
    {
        $product = Product::findOrFail($id);

        if ($product->img_url) {
            $oldPath = str_replace('/storage/', '', $product->img_url);
            Storage::disk('public')->delete($oldPath);
        }

        $product->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Produk berhasil dihapus.',
        ]);
    }
}