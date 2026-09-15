<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobOpeningRequest;
use App\Models\JobOpening;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JobOpeningController extends Controller
{
    /**
     * Public: Ambil daftar lowongan kerja
     * (Bisa difilter ?status=open untuk publik)
     */
    public function index(Request $request): JsonResponse
    {
        $query = JobOpening::latest();

        if ($request->has('status')) {
            $query->where('status', $request->query('status'));
        }

        $jobOpenings = $query->get();

        return response()->json([
            'status' => 'success',
            'data'   => $jobOpenings,
        ]);
    }

    /**
     * Public: Detail lowongan kerja
     */
    public function show(string $id): JsonResponse
    {
        $jobOpening = JobOpening::with('applications')->findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data'   => $jobOpening,
        ]);
    }

    /**
     * Protected: Tambah lowongan kerja baru
     */
    public function store(StoreJobOpeningRequest $request): JsonResponse
    {
        $data = $request->validated();
        $jobOpening = JobOpening::create($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Lowongan kerja berhasil ditambahkan.',
            'data'    => $jobOpening,
        ], 201);
    }

    /**
     * Protected: Update lowongan kerja
     */
    public function update(StoreJobOpeningRequest $request, string $id): JsonResponse
    {
        $jobOpening = JobOpening::findOrFail($id);
        $jobOpening->update($request->validated());

        return response()->json([
            'status'  => 'success',
            'message' => 'Lowongan kerja berhasil diperbarui.',
            'data'    => $jobOpening,
        ]);
    }

    /**
     * Protected: Hapus lowongan kerja
     */
    public function destroy(string $id): JsonResponse
    {
        $jobOpening = JobOpening::findOrFail($id);
        $jobOpening->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Lowongan kerja berhasil dihapus.',
        ]);
    }
}