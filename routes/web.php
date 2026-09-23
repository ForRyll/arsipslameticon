<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TestDatabaseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PeopleController;
use App\Models\Client;
use App\Models\CompanyProfile;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\JobOpening;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

// Bagikan $companyProfile ke seluruh view (Cached per-request agar tidak memicu query N+1)
View::composer('*', function ($view) {
    static $companyProfile = null;
    if ($companyProfile === null) {
        $companyProfile = CompanyProfile::where('is_active', true)->first() 
            ?? CompanyProfile::first();
    }
    $view->with('companyProfile', $companyProfile);
});

Route::get('/', function () {
    $categories = ProductCategory::with([
        'workPhases' => fn($q) => $q->orderBy('display_order', 'asc'),
        'products'   => fn($q) => $q->orderBy('display_order', 'asc')
    ])->get();

    $clients = Client::all();

    return view('welcome', compact('categories', 'clients'));
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/our-people', [PeopleController::class, 'index'])->name('our-people');

// FIXED: Ditambahkan ->name('services') agar route('services') di Blade/Footer tidak error
Route::get('/services', function () {
    // 1. Ambil Data Services
    $services = Service::orderBy('display_order', 'asc')->get();

    // 2. Ambil Data Profil Perusahaan
    $company = CompanyProfile::where('is_active', true)->first() 
                ?? CompanyProfile::first();

    // 3. Ambil Data Produk IT Pertama
    $itProduct = Product::whereHas('category', function ($query) {
        $query->where('slug', 'it')
              ->orWhere('name->en', 'like', '%IT%')
              ->orWhere('name->id', 'like', '%IT%');
    })
    ->orderBy('display_order', 'asc')
    ->first();

    return view('services', compact('services', 'company', 'itProduct'));
})->name('services');

Route::get('/product', function () {
    $categories = ProductCategory::with([
        'workPhases' => fn($q) => $q->orderBy('display_order', 'asc'),
        'products'   => fn($q) => $q->orderBy('display_order', 'asc')
    ])->get();

    $clients = Client::all();

    return view('product', compact('categories', 'clients'));
})->name('product');

Route::get('/career', function () {
    $jobOpenings = JobOpening::where('status', 'open')
        ->latest()
        ->get();

    return view('career', compact('jobOpenings'));
})->name('career');

Route::get('/apply', function (Request $request) {
    $jobId = $request->query('job_id');
    $job = JobOpening::findOrFail($jobId);

    return view('apply', compact('job'));
})->name('apply');

// Route Halaman Gallery
Route::get('/gallery', function () {
    $categories = GalleryCategory::all();
    $galleries = Gallery::with('category')
        ->orderBy('display_order', 'asc')
        ->latest()
        ->get();

    $years = $galleries->pluck('created_at')
        ->filter()
        ->map(fn($date) => $date->format('Y'))
        ->unique()
        ->values();

    return view('gallery', compact('categories', 'galleries', 'years'));
})->name('gallery');

// --- AUTHENTICATION ROUTES ---
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Route Halaman Utama News
Route::get('/news', function () {
    $categories = NewsCategory::all();
    $news = News::with('category')->latest()->get();

    return view('news', compact('categories', 'news'));
})->name('news');

// Route Halaman Detail News (Mendukung ID maupun Slug)
Route::get('/news/{identifier}', function ($identifier) {
    $news = News::with('category')
        ->where('id', $identifier)
        ->orWhere('slug->' . app()->getLocale(), $identifier)
        ->orWhere('slug->id', $identifier)
        ->orWhere('slug->en', $identifier)
        ->firstOrFail();

    return view('newsdetail', compact('news'));
})->name('news.detail');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/test-db', [TestDatabaseController::class, 'index']);

// FIXED: Ditambahkan ->name('contact')
Route::get('/contact', function () {
    return view('contact');
})->name('contact');