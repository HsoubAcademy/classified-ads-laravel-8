<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ads()
    {
        return $this->hasMany('App\Models\Ad');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function favAds()
    {
        return $this->belongsToMany('App\Models\Ad','favorites')->withTimestamps();
    }
}
