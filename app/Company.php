<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
    	'name',
    	'description',
    	'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');//A Company belongs to a user.
    }

    public function projects(){
      return $this->hasMany('App\Project');
    }

}
