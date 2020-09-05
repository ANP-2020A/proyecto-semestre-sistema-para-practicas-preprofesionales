<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    const ROLE_SUPERADMIN = 'ROLE_SUPERADMIN';
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_INTERN = 'ROLE_INTERN';
    const ROLE_BUSINESS = 'ROLE_BUSINESS';

    private const ROLES_HIERARCHY = [
        self::ROLE_SUPERADMIN => [self::ROLE_ADMIN, self::ROLE_INTERN, self::ROLE_BUSINESS],
        self::ROLE_ADMIN => [self::ROLE_INTERN, self::ROLE_BUSINESS],
        self::ROLE_INTERN => [],
        self::ROLE_BUSINESS => []
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function isGranted($role){
        return $role === $this->role || in_array($role, self::ROLES_HIERARCHY[$this->role]);
    }

    public function userable(){
        return $this->morphTo();
    }
}
