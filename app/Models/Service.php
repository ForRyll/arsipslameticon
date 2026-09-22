<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $keyType = 'string';
    public $incrementing = false;

    public array $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'title',
        'icon_url',
        'description',
        'display_order',
    ];

    public function getActivityLogName(): string
    {
        return 'Layanan / Service';
    }
}