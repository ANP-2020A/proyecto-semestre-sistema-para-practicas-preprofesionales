<?php

namespace App\Policies;

use App\Offer;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferPolicy
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

    public function view(User $user, Offer $offer)
    {
        return $user->userable_id === $offer->business_id || $user->isGranted(User::ROLE_BUSINESS);

    }

    public function create(User $user)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }

    public function update(User $user, Offer $offer)
    {
        return $user->isGranted(User::ROLE_INTERN) && $user->userable_id === $offer->business_id;

    }

    public function delete(User $user, Offer $offer)
    {
        return $user->isGranted(User::ROLE_INTERN);

    }

    public function restore(User $user, Offer $offer)
    {
        //
    }

    public function forceDelete(User $user, Offer $offer)
    {
        //
    }
}
