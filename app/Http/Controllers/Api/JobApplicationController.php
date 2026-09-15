<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobApplicationRequest;
use App\Http\Requests\UpdateJobApplicationStatusRequest;
use App\Models\JobApplication;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    /**
     * Protected: Ambil semua data pelamar (Bisa filter ?job_opening_id= UUID atau ?status=)
     */
    public function index(Request $request): JsonResponse
    {
        $query = JobApplication::with('jobOpening')->latest();

        if ($request->has('job_opening_id')) {
            $query->where('job_opening_id', $request->query('job_opening_id'));
        }

        if ($request->has('status')) {
            $query->where('status', $request->query('status'));
        }

        return response()->json([
            'status' => 'success',
            'data'   => $query->get(),
        ]);
    }

    /**
     * Protected: Detail data pelamar
     */
    public function show(string $id): JsonResponse
    {
        $application = JobApplication::with('jobOpening')->findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data'   => $application,
        ]);
    }

    /**
     * Public: Apply / Kirim Lamaran Kerja (Upload File CV)
     */
    public function store(StoreJobApplicationRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('cv')) {
            $path = $request->file('cv')->store('cvs', 'public');
            $data['cv_url'] = Storage::url($path);
        }

        $data['status'] = 'applied';
        $data['applied_at'] = now();

        $application = JobApplication::create($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Lamaran kerja berhasil dikirim.',
            'data'    => $application->load('jobOpening'),
        ], 201);
    }

    /**
     * Protected: Update Status Lamaran (Recruitment Pipeline)
     */
    public function updateStatus(UpdateJobApplicationStatusRequest $request, string $id): JsonResponse
    {
        $application = JobApplication::findOrFail($id);
        $application->update([
            'status' => $request->validated('status'),
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Status lamaran berhasil diperbarui.',
            'data'    => $application,
        ]);
    }

    /**
     * Protected: Hapus lamaran dan file CV-nya
     */
    public function destroy(string $id): JsonResponse
    {
        $application = JobApplication::findOrFail($id);

        if ($application->cv_url) {
            $oldPath = str_replace('/storage/', '', $application->cv_url);
            Storage::disk('public')->delete($oldPath);
        }

        $application->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data lamaran berhasil dihapus.',
        ]);
    }
}