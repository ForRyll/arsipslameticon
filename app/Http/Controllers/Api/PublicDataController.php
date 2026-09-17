<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CompanyProfile;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Http\JsonResponse;

class PublicDataController extends Controller
{
    /**
     * Data Gabungan untuk Landing Page Utama (Homepage)
     */
    public function getLandingPageData(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'data'   => [
                'company'            => CompanyProfile::first(),
                'services'           => Service::orderBy('display_order', 'asc')->get(),
                'products'           => Product::with(['category', 'client'])->orderBy('display_order', 'asc')->take(6)->get(),
                'project_categories' => ProductCategory::with(['products' => function ($query) {
                    $query->orderBy('display_order', 'asc');
                }])->get(),
                'clients'            => Client::latest()->get(),
                'latest_news'        => News::with([
                    'category',
                    'author' => function ($query) {
                        $query->select('id', 'name');
                    }
                ])->latest()->take(3)->get(),
            ]
        ]);
    }

    /**
     * Page: Profile > About Us
     */
    public function getAboutUs(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'data'   => CompanyProfile::first()
        ]);
    }

    /**
     * Page: Profile > Our People (Team Members)
     */
    public function getTeamMembers(): JsonResponse
    {
        $teams = TeamMember::with('position')->get();

        return response()->json([
            'status' => 'success',
            'data'   => $teams
        ]);
    }

    /**
     * Page: Work > Portfolio / Products
     */
    public function getProducts(): JsonResponse
    {
        $products = Product::with(['category', 'client'])->orderBy('display_order', 'asc')->get();

        return response()->json([
            'status' => 'success',
            'data'   => $products
        ]);
    }

    /**
     * Page: Insight > News
     */
    public function getNews(): JsonResponse
    {
        $news = News::with([
            'category',
            'author' => function ($query) {
                $query->select('id', 'name');
            }
        ])->latest()->paginate(9);

        return response()->json([
            'status' => 'success',
            'data'   => $news
        ]);
    }

    /**
     * Page: Insight > Gallery
     */
    public function getGalleries(): JsonResponse
    {
        $galleries = Gallery::with('category')->orderBy('display_order', 'asc')->get();

        return response()->json([
            'status' => 'success',
            'data'   => $galleries
        ]);
    }
}