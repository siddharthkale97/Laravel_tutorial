<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
    	'name',
    	'descripton',
    	'user_id',
    ]

    public function user(){
        return $this->belongsTo('App\User');//A task belongs to a user.
    }

}
