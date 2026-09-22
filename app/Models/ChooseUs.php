<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ChooseUs extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $table = 'choose_uses';

    protected $keyType = 'string';
    public $incrementing = false;

    public array $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'title',
        'description',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'is_active'  => 'boolean',
    ];

    public function getActivityLogName(): string
    {
        return 'Why Choose Us';
    }
}