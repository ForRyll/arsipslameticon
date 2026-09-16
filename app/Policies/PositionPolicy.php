<?php

namespace App\Policies;

use App\Models\Position;
use App\Models\User;

class PositionPolicy
{
    public function viewAny(User $user): bool { return $user->hasPermission('manage-team'); }
    public function view(User $user, Position $position): bool { return $user->hasPermission('manage-team'); }
    public function create(User $user): bool { return $user->hasPermission('manage-team'); }
    public function update(User $user, Position $position): bool { return $user->hasPermission('manage-team'); }
    public function delete(User $user, Position $position): bool { return $user->hasPermission('manage-team'); }
}