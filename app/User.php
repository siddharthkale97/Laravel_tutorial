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
        'name',
        'email',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'roll_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments(){
        return $this->hasMany('App\Comment');
    }

     public function companies(){
        return $this->hasMany('App\Company');
    }

    public function role(){
        return $this->belongsTo('App\Role');//A user can have only one role.
    }

    public function tasks(){
        return $this->belongsToMany('App\Task');//A user belongs to many task.
    }

    public function projects(){
        return $this->belongsToMany('App\Projects');//A user belongs to many projects.
    }

}
