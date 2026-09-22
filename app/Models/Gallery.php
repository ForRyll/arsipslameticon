<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Gallery extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $table = 'galleries';
    protected $keyType = 'string';
    public $incrementing = false;

    public array $translatable = [
        'title',
        'caption',
    ];

    protected $fillable = [
        'category_id',
        'title',
        'display_order',
        'img_url',
        'caption',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id');
    }

    public function getActivityLogName(): string
    {
        return 'Galeri';
    }
}