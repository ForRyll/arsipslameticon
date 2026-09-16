<?php

namespace App\Policies;

use App\Models\GalleryCategory;
use App\Models\User;

class GalleryCategoryPolicy
{
    public function viewAny(User $user): bool { return $user->hasPermission('manage-galleries'); }
    public function view(User $user, GalleryCategory $galleryCategory): bool { return $user->hasPermission('manage-galleries'); }
    public function create(User $user): bool { return $user->hasPermission('manage-galleries'); }
    public function update(User $user, GalleryCategory $galleryCategory): bool { return $user->hasPermission('manage-galleries'); }
    public function delete(User $user, GalleryCategory $galleryCategory): bool { return $user->hasPermission('manage-galleries'); }
}