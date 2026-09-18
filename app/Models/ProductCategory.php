<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory, HasUuids, LogsActivity;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Relasi ke model Product
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    /**
     * Relasi ke model WorkPhase
     */
    public function workPhases(): HasMany
    {
        return $this->hasMany(WorkPhase::class, 'product_category_id')->orderBy('display_order', 'asc');
    }

    /**
     * Nama kustom untuk deskripsi log
     */
    public function getActivityLogName(): string
    {
        return 'Kategori Produk';
    }
}