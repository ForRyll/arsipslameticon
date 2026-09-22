<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WorkPhase;

class WorkPhasePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('manage-work-phases');
    }

    public function view(User $user, WorkPhase $workPhase): bool
    {
        return $user->hasPermission('manage-work-phases');
    }

    public function create(User $user): bool
    {
        return $user->hasPermission('manage-work-phases');
    }

    public function update(User $user, WorkPhase $workPhase): bool
    {
        return $user->hasPermission('manage-work-phases');
    }

    public function delete(User $user, WorkPhase $workPhase): bool
    {
        return $user->hasPermission('manage-work-phases');
    }
}