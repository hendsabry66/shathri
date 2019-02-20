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

    public function status(){
        return $this->belongsTo('App\Status', 'status_id');
    }

    public function news(){
        return $this->hasMany('App\New','user_id');
    }

     public function posts(){
        return $this->hasMany('App\Post','user_id');
    }

     public function images(){
        return $this->hasMany('App\Image','user_id');
    }

     public function videos(){
        return $this->hasMany('App\Video','user_id');
    }

    public function articles(){
        return $this->hasMany('App\Article','user_id');
    }

    public function events(){
        return $this->hasMany('App\Event','user_id');
    }

     public function cases(){
        return $this->hasMany('App\Case','user_id');
    }
}
