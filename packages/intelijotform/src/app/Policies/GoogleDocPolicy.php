<?php

namespace Softwarescares\Inteligoogle\app\Policies;

use Softwarescares\Inteligoogle\app\Models\GoogleDoc;
use Softwarescares\Inteligoogle\app\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GoogleDocPolicy
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, GoogleDoc $googleDoc)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, GoogleDoc $googleDoc)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, GoogleDoc $googleDoc)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, GoogleDoc $googleDoc)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, GoogleDoc $googleDoc)
    {
        //
    }
}
