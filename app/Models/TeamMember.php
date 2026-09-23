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
        'about',
        'quote',
    ];

    protected $fillable = [
        'position_id',
        'name',
        'photo_url',
        'last_education',
        'about',
        'quote',
        'instagram_url',
        'facebook_url',
        'x_url',
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