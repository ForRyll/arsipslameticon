<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkPhase extends Model
{
    use HasFactory, HasUuids, LogsActivity;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'product_category_id',
        'title',
        'description',
        'display_order',
    ];

    /**
     * Append otomatis phase_number saat model di-serialize ke JSON
     */
    protected $appends = ['phase_number'];

    /**
     * Accessor untuk menghasilkan phase_number otomatis ("01", "02", dst) dari display_order
     */
    public function getPhaseNumberAttribute(): string
    {
        return str_pad((string) ($this->display_order ?? 1), 2, '0', STR_PAD_LEFT);
    }

    /**
     * Relasi ke ProductCategory
     */
    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    /**
     * Auto-increment display_order khusus per product_category_id jika dikosongkan
     */
    protected static function booted(): void
    {
        static::creating(function ($workPhase) {
            if (empty($workPhase->display_order)) {
                $maxOrder = static::where('product_category_id', $workPhase->product_category_id)
                    ->max('display_order');

                $workPhase->display_order = ($maxOrder ?? 0) + 1;
            }
        });
    }

    /**
     * Nama kustom untuk deskripsi log aktivitas
     */
    public function getActivityLogName(): string
    {
        return 'Fase Kerja';
    }
}