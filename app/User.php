<?php

namespace App;

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


    public function posts(){

        return $this->hasMany('App\post');
    }

//    public function allpost(){
//        return $this->belongsToMany(post::class);
//    }

//    public function users(){
//        return $this->belongsToMany(post::class);
//    }

//    public function alluser(){
//        return $this->belongsToMany(post::class);
//    }


}
