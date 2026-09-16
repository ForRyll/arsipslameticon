<?php

namespace App\Policies;

use App\Models\Contact;
use App\Models\User;

class ContactPolicy
{
    public function viewAny(User $user): bool { return $user->hasPermission('manage-contacts'); }
    public function view(User $user, Contact $contact): bool { return $user->hasPermission('manage-contacts'); }
    public function create(User $user): bool { return false; } // Pesan dibuat oleh publik/client via form
    public function update(User $user, Contact $contact): bool { return $user->hasPermission('manage-contacts'); } // Update status baca/balas
    public function delete(User $user, Contact $contact): bool { return $user->hasPermission('manage-contacts'); }
}