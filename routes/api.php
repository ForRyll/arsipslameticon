<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\GalleryCategoryController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\JobApplicationController;
use App\Http\Controllers\Api\JobOpeningController;
use App\Http\Controllers\Api\NewsCategoryController;
use App\Http\Controllers\Api\NewsController;

use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\TeamMemberController; // <-- 1. Ditambahkan
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ProductController;
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

// Public Endpoints Kategori Produk
Route::get('/product-categories', [ProductCategoryController::class, 'index']);
Route::get('/product-categories/{id}', [ProductCategoryController::class, 'show']);

// Public Endpoints Client
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients/{id}', [ClientController::class, 'show']);

// Public Endpoints Produk
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// Public Endpoints Kategori Galeri
Route::get('/gallery-categories', [GalleryCategoryController::class, 'index']);
Route::get('/gallery-categories/{id}', [GalleryCategoryController::class, 'show']);

// Public Endpoints Galeri
Route::get('/galleries', [GalleryController::class, 'index']);
Route::get('/galleries/{id}', [GalleryController::class, 'show']);

// Public Endpoints Lowongan Kerja
Route::get('/job-openings', [JobOpeningController::class, 'index']);
Route::get('/job-openings/{id}', [JobOpeningController::class, 'show']);

// Public Endpoint Submit Lamaran Kerja
Route::post('/job-applications', [JobApplicationController::class, 'store']);


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

    // Content Management Endpoints
    Route::middleware('permission:manage-news')->group(function () {
        
        // News Management
        Route::post('/news', [NewsController::class, 'store']);
        Route::post('/news/{id}', [NewsController::class, 'update']); 
        Route::put('/news/{id}', [NewsController::class, 'update']);
        Route::delete('/news/{id}', [NewsController::class, 'destroy']);

        // News Categories Management
        Route::post('/news-categories', [NewsCategoryController::class, 'store']);
        Route::put('/news-categories/{id}', [NewsCategoryController::class, 'update']);
        Route::delete('/news-categories/{id}', [NewsCategoryController::class, 'destroy']);

        // Product Categories Management
        Route::post('/product-categories', [ProductCategoryController::class, 'store']);
        Route::put('/product-categories/{id}', [ProductCategoryController::class, 'update']);
        Route::delete('/product-categories/{id}', [ProductCategoryController::class, 'destroy']);

        // Client Management
        Route::post('/clients', [ClientController::class, 'store']);
        Route::post('/clients/{id}', [ClientController::class, 'update']);
        Route::put('/clients/{id}', [ClientController::class, 'update']);
        Route::delete('/clients/{id}', [ClientController::class, 'destroy']);

        // Product Management
        Route::post('/products', [ProductController::class, 'store']);
        Route::post('/products/{id}', [ProductController::class, 'update']);
        Route::put('/products/{id}', [ProductController::class, 'update']);
        Route::delete('/products/{id}', [ProductController::class, 'destroy']);

        // Gallery Categories Management
        Route::post('/gallery-categories', [GalleryCategoryController::class, 'store']);
        Route::put('/gallery-categories/{id}', [GalleryCategoryController::class, 'update']);
        Route::delete('/gallery-categories/{id}', [GalleryCategoryController::class, 'destroy']);

        // Gallery Management
        Route::post('/galleries', [GalleryController::class, 'store']);
        Route::post('/galleries/{id}', [GalleryController::class, 'update']);
        Route::put('/galleries/{id}', [GalleryController::class, 'update']);
        Route::delete('/galleries/{id}', [GalleryController::class, 'destroy']);

        // Job Openings Management
        Route::post('/job-openings', [JobOpeningController::class, 'store']);
        Route::put('/job-openings/{id}', [JobOpeningController::class, 'update']);
        Route::delete('/job-openings/{id}', [JobOpeningController::class, 'destroy']);

        // Job Applications Management (Khusus Admin / HR)
        Route::get('/job-applications', [JobApplicationController::class, 'index']);
        Route::get('/job-applications/{id}', [JobApplicationController::class, 'show']);
        Route::patch('/job-applications/{id}/status', [JobApplicationController::class, 'updateStatus']);
        Route::delete('/job-applications/{id}', [JobApplicationController::class, 'destroy']);
    });

    // ==========================================
    // 3. POSITIONS & TEAM MANAGEMENT (Kelola Jabatan & Tim)
    // ==========================================
    Route::apiResource('positions', PositionController::class);

    // <-- 2. Ditambahkan di sini
    Route::apiResource('team-members', TeamMemberController::class);
    Route::post('/team-members/{team_member}', [TeamMemberController::class, 'update']); 

});