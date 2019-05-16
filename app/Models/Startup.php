<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    protected $fillable = [
        'title', 'description', 'creator_id',
        'logo', 'tagline', 'money',
        'need_money', 'likes',
    ];

    public function upvote()
    {
        return $this->belongsToMany('App\User', 'startup_user_upvote',
            'startup_id', 'user_id');
    }

    public function downvote()
    {
        return $this->belongsToMany('App\User', 'startup_user_downvote',
            'startup_id', 'user_id');
    }

    public function creator()
    {
        return $this->belongsTo('App\User');
    }
}
