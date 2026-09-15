<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'galleries';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'category_id',
        'title',
        'display_order',
        'img_url',
        'caption',
    ];

    /**
     * Relasi ke GalleryCategory
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id');
    }
}