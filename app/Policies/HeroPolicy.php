<?php

namespace App\Policies;

use App\Models\Hero;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HeroPolicy
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
        return in_array('hero-view-all', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Hero $hero)
    {
        return in_array('hero-view', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('hero-create', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Hero $hero)
    {
        return in_array('hero-update', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Hero $hero)
    {
        return in_array('hero-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Hero $hero)
    {
        return in_array('hero-restore', $user->getAllPermissions()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Hero $hero)
    {
        return in_array('hero-delete', $user->getAllPermissions()->pluck('name')->toArray());
    }
}
