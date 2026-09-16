<?php

namespace App\Policies;

use App\Models\ActivityLog;
use App\Models\User;

class ActivityLogPolicy
{
    public function viewAny(User $user): bool { return $user->hasPermission('view-activity-logs'); }
    public function view(User $user, ActivityLog $activityLog): bool { return $user->hasPermission('view-activity-logs'); }
    public function create(User $user): bool { return false; } // Log hanya dibuat otomatis oleh sistem
    public function update(User $user, ActivityLog $activityLog): bool { return false; }
    public function delete(User $user, ActivityLog $activityLog): bool { return false; }
}