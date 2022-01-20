<?php

namespace App\Policies;

use App\Models\People;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeoplePolicy
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
        return in_array('people-view-all', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\People  $people
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, People $people)
    {
        return in_array('people-view', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('people-create', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\People  $people
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, People $people)
    {
        return in_array('people-update', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\People  $people
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, People $people)
    {
        return in_array('people-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\People  $people
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, People $people)
    {
        return in_array('people-restore', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\People  $people
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, People $people)
    {
        return in_array('people-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }
}
