<?php

namespace App\Policies;

use App\Models\Mnqf;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MnqfPolicy
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
        return in_array('mnqf-view-all', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mnqf  $mnqf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Mnqf $mnqf)
    {
        return in_array('mnqf-view', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('mnqf-create', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mnqf  $mnqf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Mnqf $mnqf)
    {
        return in_array('mnqf-update', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mnqf  $mnqf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Mnqf $mnqf)
    {
        return in_array('mnqf-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mnqf  $mnqf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Mnqf $mnqf)
    {
        return in_array('mnqf-restore', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mnqf  $mnqf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Mnqf $mnqf)
    {
        return in_array('mnqf-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }
}
