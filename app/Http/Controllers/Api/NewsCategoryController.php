<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsCategoryRequest;
use App\Http\Requests\UpdateNewsCategoryRequest;
use App\Http\Resources\NewsCategoryResource;
use App\Models\NewsCategory;
use Illuminate\Support\Str;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::latest()->get();
        return NewsCategoryResource::collection($categories);
    }

    public function store(StoreNewsCategoryRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);

        $category = NewsCategory::create($data);

        return (new NewsCategoryResource($category))
            ->response()
            ->setStatusCode(201);
    }

    public function show(string $id)
    {
        $category = NewsCategory::findOrFail($id);
        return new NewsCategoryResource($category);
    }

    public function update(UpdateNewsCategoryRequest $request, string $id)
    {
        $category = NewsCategory::findOrFail($id);
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);

        $category->update($data);

        return new NewsCategoryResource($category);
    }

    public function destroy(string $id)
    {
        $category = NewsCategory::findOrFail($id);
        $category->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Kategori berhasil dihapus'
        ]);
    }
}