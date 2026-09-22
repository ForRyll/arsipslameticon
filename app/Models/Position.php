<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Position extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $keyType = 'string';
    public $incrementing = false;

    public array $translatable = [
        'name',
        'description',
    ];

    protected $fillable = [
        'name',
        'description',
    ];

    public function getActivityLogName(): string
    {
        return 'Jabatan / Posisi';
    }
}