<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class JobOpening extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $keyType = 'string';
    public $incrementing = false;

    public array $translatable = [
        'title',
        'description',
        'department',
        'requirements',
    ];

    protected $fillable = [
        'title',
        'description',
        'status',
        'location',
        'job_type',
        'department',
        'requirements',
    ];

    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class, 'job_opening_id');
    }

    public function getActivityLogName(): string
    {
        return 'Lowongan Kerja';
    }
}