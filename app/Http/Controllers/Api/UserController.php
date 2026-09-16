<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStafRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Ambil daftar Staf beserta Role & Direct Permissions milik user
     */
    public function index()
    {
        $stafs = User::whereHas('role', function ($q) {
            $q->where('name', 'staf')->orWhere('name', 'Staf');
        })->with(['role', 'permissions'])->latest()->get();

        return response()->json([
            'status' => 'success',
            'data'   => $stafs
        ]);
    }

    /**
     * Admin Menambahkan Staf Baru
     */
    public function storeStaf(StoreStafRequest $request)
    {
        $data = $request->validated();

        $roleStaf = Role::where('name', 'staf')->orWhere('name', 'Staf')->firstOrFail();

        // Buat user Staf baru
        $staf = User::create([
            'role_id'       => $roleStaf->id,
            'name'          => $data['name'],
            'email'         => $data['email'],
            'password_hash' => $data['password'],
        ]);

        // Jika request membawa array permission saat create
        if (!empty($data['permissions'])) {
            $syncData = [];
            foreach ($data['permissions'] as $permId) {
                $syncData[$permId] = ['id' => (string) Str::uuid()];
            }
            $staf->permissions()->sync($syncData);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Staf berhasil ditambahkan.',
            'data'    => $staf->load(['role', 'permissions'])
        ], 201);
    }

    /**
     * Admin Mengatur Fitur / Permission Spesifik per User Staf
     */
    public function updateStafPermissions(Request $request, string $stafId)
    {
        $request->validate([
            'permissions'   => 'required|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        $staf = User::with('role')->findOrFail($stafId);

        // Pastikan target memang berkategori Staf
        if (strtolower($staf->role?->name) !== 'staf') {
            return response()->json([
                'status'  => 'error',
                'message' => 'Hanya user dengan role staf yang dapat diubah izin fiturnya.'
            ], 400);
        }

        // Format sync pivot untuk relasi direct permissions milik User
        $syncData = [];
        foreach ($request->permissions as $permId) {
            $syncData[$permId] = ['id' => (string) Str::uuid()];
        }

        // PERBAIKAN: Sync langsung ke relasi permissions milik USER ($staf)
        $staf->permissions()->sync($syncData);

        return response()->json([
            'status'  => 'success',
            'message' => 'Hak akses fitur staf berhasil diperbarui!',
            'data'    => $staf->load(['role', 'permissions'])
        ]);
    }
}