<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password_hash',
    ];

    protected $hidden = [
        'password_hash',
        'remember_token',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'author_id');
    }

    /**
     * Relasi direct permission ke user via pivot model PermissionUser
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'permission_user')
            ->using(PermissionUser::class)
            ->withPivot('id')
            ->withTimestamps();
    }

    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    /**
     * Beritahu Laravel nama kolom password di database
     */
    public function getAuthPasswordName()
    {
        return 'password_hash';
    }

    /**
     * Helper untuk cek hak akses (Bisa via Role Permission atau Direct User Permission)
     */
    public function hasPermission(string $permissionName): bool
    {
        if (!$this->role) {
            return false;
        }

        // 1. Super Admin / Admin selalu bypass (akses penuh)
        if (in_array(strtolower($this->role->name), ['super admin', 'admin'])) {
            return true;
        }

        // 2. Cek apakah permission ada di Direct User Permission ATAU dari Role Permission
        return $this->permissions()->where('name', $permissionName)->exists()
            || $this->role->permissions()->where('name', $permissionName)->exists();
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password_hash' => 'hashed',
        ];
    }
}