<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
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
     * Relasi direct permission per staf (via pivot permission_user)
     * Menggunakan custom Pivot class untuk auto generate UUID pada ID pivot
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'permission_user')
            ->using(new class extends Pivot {
                protected static function boot()
                {
                    parent::boot();
                    static::creating(function ($model) {
                        if (empty($model->id)) {
                            $model->id = (string) Str::uuid();
                        }
                    });
                }
            });
    }

    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    /**
     * Helper untuk cek hak akses
     */
    public function hasPermission(string $permissionName): bool
    {
        if (!$this->role) {
            return false;
        }

        // 1. Admin selalu punya akses penuh
        if (strtolower($this->role->name) === 'admin') {
            return true;
        }

        // 2. Khusus Role Staf: HANYA membaca direct permission milik user tersebut (pivot permission_user)
        if (strtolower($this->role->name) === 'staf') {
            return $this->permissions()->where('name', $permissionName)->exists();
        }

        // 3. Untuk role lain (Fallback: Direct Permission OR Role Permission)
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