<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone_number','description','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function listings()
    {
      return $this->hasMany(Listing::class);
    }

    public function reviews()
    {
      return $this->hasMany(Review::class);
    }

    public function reservations()
    {
      return $this->hasMany(Reservation::class);
    }
}
