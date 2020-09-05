<?php

namespace App\Policies;

use App\Career;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CareerPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
        if ($user->isGranted(User::ROLE_SUPERADMIN)){
            return true;
        }
    }
    public function viewAny(User $user)
    {
        return $user->isGranted(User::ROLE_BUSINESS);

    }

    /**
     * Determine whether the user can view the career.
     *
     * @param  \App\User  $user
     * @param  \App\Career  $career
     * @return mixed
     */
    public function view(User $user, Career $career)
    {
        return $user->userable_id === $career->intern_id || $user->isGranted(User::ROLE_BUSINESS);

    }

    /**
     * Determine whether the user can create careers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }

    /**
     * Determine whether the user can update the career.
     *
     * @param  \App\User  $user
     * @param  \App\Career  $career
     * @return mixed
     */
    public function update(User $user, Career $career)
    {
        return $user->isGranted(User::ROLE_INTERN) && $user->userable_id === $career->intern_id;

    }

    /**
     * Determine whether the user can delete the career.
     *
     * @param  \App\User  $user
     * @param  \App\Career  $career
     * @return mixed
     */
    public function delete(User $user, Career $career)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }

    /**
     * Determine whether the user can restore the career.
     *
     * @param  \App\User  $user
     * @param  \App\Career  $career
     * @return mixed
     */
    public function restore(User $user, Career $career)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the career.
     *
     * @param  \App\User  $user
     * @param  \App\Career  $career
     * @return mixed
     */
    public function forceDelete(User $user, Career $career)
    {
        //
    }
}
