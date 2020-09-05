<?php

namespace App\Policies;

use App\Skill;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SkillPolicy
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

    public function view(User $user, Skill $skill)
    {
        return $user->userable_id === $skill->intern_id || $user->isGranted(User::ROLE_BUSINESS);
    }

    public function create(User $user)
    {
        return $user->isGranted(User::ROLE_INTERN);
    }

    public function update(User $user, Skill $skill)
    {
        return $user->isGranted(User::ROLE_INTERN) && $user->userable_id === $skill->intern_id;
    }

    public function delete(User $user, Skill $skill)
    {
        return $user->isGranted(User::ROLE_INTERN);
    }

    public function restore(User $user, Skill $skill)
    {
        //
    }

    public function forceDelete(User $user, Skill $skill)
    {
        //
    }
}
