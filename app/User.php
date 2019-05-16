<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function upvote()
    {
        return $this->belongsToMany('App\Models\Startup', 'startup_user_upvote',
            'user_id', 'startup_id');
    }


    public function downvote()
    {
        return $this->belongsToMany('App\Models\Startup', 'startup_user_downvote',
            'user_id', 'startup_id');
    }
}
