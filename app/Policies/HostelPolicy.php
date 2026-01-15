<?php

namespace App\Policies;

use App\Models\Hostel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class HostelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function manage(user $user, hostel $hostel): bool
    {
        return $user->id === $hostel->owner_id;
    }
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Hostel $hostel): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Hostel $hostel): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Hostel $hostel): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Hostel $hostel): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Hostel $hostel): bool
    {
        return false;
    }
}
