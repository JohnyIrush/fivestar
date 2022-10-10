<?php

namespace Softwarescares\Inteliform\app\Policies;

use Softwarescares\Inteliform\app\Models\FieldSection;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class FieldSectionPolicy
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
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, FieldSection $fieldSection)
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
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, FieldSection $fieldSection)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, FieldSection $fieldSection)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, FieldSection $fieldSection)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, FieldSection $fieldSection)
    {
        //
    }
}
