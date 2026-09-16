<?php

namespace App\Policies;

use App\Models\JobOpening;
use App\Models\User;

class JobOpeningPolicy
{
    public function viewAny(User $user): bool { return $user->hasPermission('manage-jobs'); }
    public function view(User $user, JobOpening $jobOpening): bool { return $user->hasPermission('manage-jobs'); }
    public function create(User $user): bool { return $user->hasPermission('manage-jobs'); }
    public function update(User $user, JobOpening $jobOpening): bool { return $user->hasPermission('manage-jobs'); }
    public function delete(User $user, JobOpening $jobOpening): bool { return $user->hasPermission('manage-jobs'); }
}