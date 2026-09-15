<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\CompanyProfile;
use App\Models\TeamMember;
use App\Models\News;
use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\JobOpening;
use App\Models\ActivityLog;
use Illuminate\Http\JsonResponse;

class TestDatabaseController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Semua tabel dan relasi database berfungsi normal!',
            'data_summary' => [
                'users' => User::with('role.permissions')->get(),
                'company_profiles' => CompanyProfile::all(),
                'team_members' => TeamMember::with('position')->get(),
                'news' => News::with(['category', 'author'])->get(),
                'products' => Product::with(['category', 'client'])->get(),
                'services' => Service::all(),
                'settings' => Setting::all(),
                'contacts' => Contact::all(),
                'job_openings' => JobOpening::with('applications')->get(),
                'activity_logs' => ActivityLog::with(['user', 'target'])->get(),
            ]
        ]);
    }
}