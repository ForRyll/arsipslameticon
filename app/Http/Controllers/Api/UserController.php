<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // Ambil daftar Staf
    public function index()
    {
        $stafs = User::whereHas('role', function ($q) {
            $q->where('name', 'staf');
        })->with('role.permissions')->get();

        return response()->json(['status' => 'success', 'data' => $stafs]);
    }

    // Admin Menambahkan Staf Baru
    public function storeStaf(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $roleStaf = Role::where('name', 'staf')->firstOrFail();

        $staf = User::create([
            'role_id' => $roleStaf->id,
            'name' => $request->name,
            'email' => $request->email,
            'password_hash' => $request->password, // Otomatis ter-hash dari $casts model User
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Staf berhasil ditambahkan.',
            'data' => $staf
        ], 201);
    }

    // Admin Mengatur Fitur / Permission untuk Staf
    public function updateStafPermissions(Request $request, $stafId)
    {
        $request->validate([
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        $staf = User::findOrFail($stafId);

        if ($staf->role->name !== 'staf') {
            return response()->json(['message' => 'Hanya role staf yang dapat diubah izin fiturnya.'], 400);
        }

        $syncData = [];
        foreach ($request->permissions as $permId) {
            $syncData[$permId] = ['id' => (string) Str::uuid()];
        }

        $staf->role->permissions()->sync($syncData);

        return response()->json([
            'status' => 'success',
            'message' => 'Hak akses fitur staf berhasil diperbarui!'
        ]);
    }
}