<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'position_id',
        'name',
        'photo_url',
        'bio',
    ];

    /**
     * Relasi ke model Position
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}