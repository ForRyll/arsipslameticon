<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class NewsCategory extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $keyType = 'string';
    public $incrementing = false;

    // Tambahkan 'slug' di sini
    public array $translatable = [
        'name',
        'slug',
    ];

    protected $fillable = [
        'name',
        'slug',
    ];

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'category_id');
    }

    public function getActivityLogName(): string
    {
        return 'Kategori Berita';
    }
}