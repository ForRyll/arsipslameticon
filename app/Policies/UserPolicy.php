<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('manage-users');
    }

    public function view(User $user, User $model): bool
    {
        return $user->hasPermission('manage-users');
    }

    public function create(User $user): bool
    {
        return $user->hasPermission('manage-users');
    }

    public function update(User $user, User $model): bool
    {
        return $user->hasPermission('manage-users');
    }

    public function delete(User $user, User $model): bool
    {
        // Mencegah user menghapus akunnya sendiri
        if ($user->id === $model->id) {
            return false;
        }

        return $user->hasPermission('manage-users');
    }
}