<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class WorkPhase extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $keyType = 'string';
    public $incrementing = false;

    public array $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'product_category_id',
        'title',
        'description',
        'display_order',
    ];

    protected $appends = ['phase_number'];

    public function getPhaseNumberAttribute(): string
    {
        return str_pad((string) ($this->display_order ?? 1), 2, '0', STR_PAD_LEFT);
    }

    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

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

    public function getActivityLogName(): string
    {
        return 'Fase Kerja';
    }
}