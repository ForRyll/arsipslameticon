<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // 1. Import HasMany

class JobOpening extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'title',
        'description',
        'status',
        'location',
        'job_type',
        'department',
        'requirements',
    ];

    /**
     * Relasi HasMany ke model JobApplication
     */
    public function applications(): HasMany // 2. Tambahkan method relasi ini
    {
        return $this->hasMany(JobApplication::class, 'job_opening_id');
    }
}