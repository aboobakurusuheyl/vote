<?php

namespace App\Policies;

use App\Models\Institute;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InstitutePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return in_array('institute-view-all', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institutes  $institutes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Institute $institutes)
    {
        return in_array('institute-view', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('institute-create', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institutes  $institutes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Institute $institutes)
    {
        return in_array('institute-update', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institutes  $institutes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Institute $institutes)
    {
        return in_array('institute-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institutes  $institutes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Institute $institutes)
    {
        return in_array('institute-restore', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institutes  $institutes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Institute $institutes)
    {
        return in_array('institute-forceDelete', $user->getAllPermissions()->pluck('name')->toArray());
    }
}
