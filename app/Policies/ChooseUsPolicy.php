<?php

namespace App\Policies;

use App\Models\ChooseUs;
use App\Models\User;

class ChooseUsPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('manage-company-profile');
    }

    public function view(User $user, ChooseUs $chooseUs): bool
    {
        return $user->hasPermission('manage-company-profile');
    }

    public function create(User $user): bool
    {
        return $user->hasPermission('manage-company-profile');
    }

    public function update(User $user, ChooseUs $chooseUs): bool
    {
        return $user->hasPermission('manage-company-profile');
    }

    public function delete(User $user, ChooseUs $chooseUs): bool
    {
        return $user->hasPermission('manage-company-profile');
    }
}