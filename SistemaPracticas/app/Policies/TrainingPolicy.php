<?php

namespace App\Policies;

use App\Training;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrainingPolicy
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

    public function view(User $user, Training $training)
    {
        return $user->userable_id === $training->intern_id || $user->isGranted(User::ROLE_BUSINESS);

    }

    public function create(User $user)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }

    public function update(User $user, Training $training)
    {
        return $user->isGranted(User::ROLE_INTERN) && $user->userable_id === $training->intern_id;

    }

    public function delete(User $user, Training $training)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }

    public function restore(User $user, Training $training)
    {
        //
    }

    public function forceDelete(User $user, Training $training)
    {
        //
    }
}
