<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::with(['author', 'category'])
            ->latest()
            ->paginate($request->get('per_page', 10));

        return NewsResource::collection($news);
    }

    public function store(StoreNewsRequest $request)
    {
        $data = $request->validated();
        
        // Slug unik otomatis
        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        
        // Ambil author_id dari user yang sedang login via Sanctum
        $data['author_id'] = $request->user()->id;

        // Upload Gambar
        if ($request->hasFile('img')) {
            $data['img_url'] = $request->file('img')->store('news', 'public');
        }

        $news = News::create($data);

        return (new NewsResource($news->load(['author', 'category'])))
            ->response()
            ->setStatusCode(201);
    }

    public function show(string $id)
    {
        $news = News::with(['author', 'category'])->findOrFail($id);
        
        return new NewsResource($news);
    }

    public function update(UpdateNewsRequest $request, string $id)
    {
        $news = News::findOrFail($id);
        $data = $request->validated();

        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        }

        if ($request->hasFile('img')) {
            // Hapus gambar lama jika ada
            if ($news->img_url && Storage::disk('public')->exists($news->img_url)) {
                Storage::disk('public')->delete($news->img_url);
            }
            $data['img_url'] = $request->file('img')->store('news', 'public');
        }

        $news->update($data);

        return new NewsResource($news->load(['author', 'category']));
    }

    public function destroy(string $id)
    {
        $news = News::findOrFail($id);

        if ($news->img_url && Storage::disk('public')->exists($news->img_url)) {
            Storage::disk('public')->delete($news->img_url);
        }

        $news->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Berita berhasil dihapus'
        ]);
    }
}