<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CompanyProfile extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $keyType = 'string';
    public $incrementing = false;

    public array $translatable = [
        'vision',
        'mission',
        'description',
        'tagline',
    ];

    protected $fillable = [
        'name',
        'email',
        'vision',
        'mission',
        'address',
        'addresses',
        'whatsapp',
        'logo_url',
        'description',
        'ig_url',
        'tiktok_url',
        'linkedin_url',
        'tagline',
        'founded_year',
        'is_active',
    ];

    protected $casts = [
        'addresses'    => 'array',
        'is_active'    => 'boolean',
        'founded_year' => 'integer',
    ];

    public function getActivityLogName(): string
    {
        return 'Profil Perusahaan';
    }
}