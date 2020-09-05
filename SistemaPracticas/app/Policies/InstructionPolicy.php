<?php

namespace App\Policies;

use App\Instruction;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InstructionPolicy
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

    public function view(User $user, Instruction $instruction)
    {
        return $user->userable_id === $instruction->intern_id || $user->isGranted(User::ROLE_BUSINESS);

    }

    public function create(User $user)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }

    public function update(User $user, Instruction $instruction)
    {
        return $user->isGranted(User::ROLE_INTERN) && $user->userable_id === $instruction->intern_id;

    }

    public function delete(User $user, Instruction $instruction)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }


    public function restore(User $user, Instruction $instruction)
    {
        //
    }


    public function forceDelete(User $user, Instruction $instruction)
    {
        //
    }
}
