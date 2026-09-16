<?php

namespace App\Policies;

use App\Models\NewsCategory;
use App\Models\User;

class NewsCategoryPolicy
{
    public function viewAny(User $user): bool { return $user->hasPermission('manage-news'); }
    public function view(User $user, NewsCategory $newsCategory): bool { return $user->hasPermission('manage-news'); }
    public function create(User $user): bool { return $user->hasPermission('manage-news'); }
    public function update(User $user, NewsCategory $newsCategory): bool { return $user->hasPermission('manage-news'); }
    public function delete(User $user, NewsCategory $newsCategory): bool { return $user->hasPermission('manage-news'); }
}