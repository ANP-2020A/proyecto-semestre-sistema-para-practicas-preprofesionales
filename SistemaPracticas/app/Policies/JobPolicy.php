<?php

namespace App\Policies;

use App\Job;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
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


    public function view(User $user, Job $job)
    {
        return $user->userable_id === $job->intern_id || $user->isGranted(User::ROLE_BUSINESS);

    }


    public function create(User $user)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }

    public function update(User $user, Job $job)
    {
        return $user->isGranted(User::ROLE_INTERN) && $user->userable_id === $job->intern_id;

    }

    public function delete(User $user, Job $job)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }


    public function restore(User $user, Job $job)
    {
        //
    }

    public function forceDelete(User $user, Job $job)
    {
        //
    }
}
