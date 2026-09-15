<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
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
    public function store(StoreClientRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('clients', 'public');
            $data['logo_url'] = Storage::url($path);
        }

        $client = Client::create($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Client berhasil ditambahkan.',
            'data'    => $client
        ], 201);
    }

    /**
     * Protected: Update client
     */
    public function update(StoreClientRequest $request, string $id)
    {
        $client = Client::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            if ($client->logo_url) {
                $oldPath = str_replace('/storage/', '', $client->logo_url);
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('logo')->store('clients', 'public');
            $data['logo_url'] = Storage::url($path);
        }

        $client->update($data);

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