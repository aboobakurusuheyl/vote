<?php

namespace App\Policies;

use App\Models\QuickLinks;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuickLinksPolicy
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
        return in_array('quicklink-view-all', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\QuickLinks  $quickLinks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, QuickLinks $quickLinks)
    {
        return in_array('quicklink-view', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('quicklink-create', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\QuickLinks  $quickLinks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, QuickLinks $quickLinks)
    {
        return in_array('quicklink-update', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\QuickLinks  $quickLinks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, QuickLinks $quickLinks)
    {
        return in_array('quicklink-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\QuickLinks  $quickLinks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, QuickLinks $quickLinks)
    {
        return in_array('quicklink-restore', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\QuickLinks  $quickLinks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, QuickLinks $quickLinks)
    {
        return in_array('quicklink-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }
}
