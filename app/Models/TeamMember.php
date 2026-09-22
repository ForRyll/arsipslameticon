<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class TeamMember extends Model
{
    use HasFactory, HasUuids, LogsActivity, HasTranslations;

    protected $keyType = 'string';
    public $incrementing = false;

    public array $translatable = [
        'bio',
        'about',
        'quote',
    ];

    protected $fillable = [
        'position_id',
        'name',
        'photo_url',
        'bio',
        'last_education',
        'about',
        'quote',
    ];

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function getActivityLogName(): string
    {
        return 'Anggota Tim';
    }
}