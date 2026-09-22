<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class ProductCategory extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $keyType = 'string';
    public $incrementing = false;

    // Daftarkan 'slug' agar terjemahan per bahasa berfungsi
    public array $translatable = [
        'name',
        'slug',
    ];

    protected $fillable = [
        'name',
        'slug',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function workPhases(): HasMany
    {
        return $this->hasMany(WorkPhase::class, 'product_category_id')->orderBy('display_order', 'asc');
    }

    public function getActivityLogName(): string
    {
        return 'Kategori Produk';
    }
}