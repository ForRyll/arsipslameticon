<?php

namespace App\Policies;

use App\Models\JobApplication;
use App\Models\User;

class JobApplicationPolicy
{
    public function viewAny(User $user): bool { return $user->hasPermission('manage-jobs'); }
    public function view(User $user, JobApplication $jobApplication): bool { return $user->hasPermission('manage-jobs'); }
    public function create(User $user): bool { return false; } // Pelamar melamar lewat form publik
    public function update(User $user, JobApplication $jobApplication): bool { return $user->hasPermission('manage-jobs'); } // Update status lamaran
    public function delete(User $user, JobApplication $jobApplication): bool { return $user->hasPermission('manage-jobs'); }
}