<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMember extends Model
{
    use HasFactory, HasUuids, LogsActivity;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'position_id',
        'name',
        'photo_url',
        'bio',
        'last_education',
        'about',
        'quote',
    ];

    /**
     * Relasi ke model Position
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    /**
     * Nama kustom untuk deskripsi log
     */
    public function getActivityLogName(): string
    {
        return 'Anggota Tim';
    }
}