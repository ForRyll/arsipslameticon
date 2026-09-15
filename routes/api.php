<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewsCategoryController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\TeamMemberController; // <-- 1. Ditambahkan
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// ==========================================
// 1. PUBLIC ROUTES (Tanpa Autentikasi)
// ==========================================
Route::post('/login', [AuthController::class, 'login']);

// Public Endpoints Berita
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);

// Public Endpoints Kategori Berita
Route::get('/news-categories', [NewsCategoryController::class, 'index']);
Route::get('/news-categories/{id}', [NewsCategoryController::class, 'show']);


// ==========================================
// 2. PROTECTED ROUTES (Wajib Auth Sanctum)
// ==========================================
Route::middleware('auth:sanctum')->group(function () {

    // Auth & Profile Endpoints
    Route::get('/me', [AuthController::class, 'me']);
    Route::put('/profile', [AuthController::class, 'updateProfile']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Admin Endpoints (Khusus Kelola Staf & Permissions)
    Route::middleware('permission:manage-users')->group(function () {
        Route::get('/admin/staf', [UserController::class, 'index']);
        Route::post('/admin/staf', [UserController::class, 'storeStaf']);
        Route::put('/admin/staf/{id}/permissions', [UserController::class, 'updateStafPermissions']);
    });

    // Content Management Endpoints (Kelola Berita & Kategori)
    Route::middleware('permission:manage-news')->group(function () {
        
        // News Management
        Route::post('/news', [NewsController::class, 'store']);
        Route::post('/news/{id}', [NewsController::class, 'update']); // Support upload file via form-data + _method=PUT
        Route::put('/news/{id}', [NewsController::class, 'update']);
        Route::delete('/news/{id}', [NewsController::class, 'destroy']);

        // News Categories Management
        Route::post('/news-categories', [NewsCategoryController::class, 'store']);
        Route::put('/news-categories/{id}', [NewsCategoryController::class, 'update']);
        Route::delete('/news-categories/{id}', [NewsCategoryController::class, 'destroy']);
    });

    // ==========================================
    // 3. POSITIONS & TEAM MANAGEMENT (Kelola Jabatan & Tim)
    // ==========================================
    Route::apiResource('positions', PositionController::class);

    // <-- 2. Ditambahkan di sini
    Route::apiResource('team-members', TeamMemberController::class);
    Route::post('/team-members/{team_member}', [TeamMemberController::class, 'update']); 

});