<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory, HasUuids, LogsActivity;

    protected $keyType = 'string';
    public $incrementing = false;

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

    /**
     * Konversi tipe data otomatis (Casting)
     */
    protected $casts = [
        'addresses'    => 'array',
        'is_active'    => 'boolean',
        'founded_year' => 'integer',
    ];

    /**
     * Nama kustom untuk deskripsi log
     */
    public function getActivityLogName(): string
    {
        return 'Profil Perusahaan';
    }
}