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

    public function users(){
        return $this->belongsTo(App\Model\User);//A task belongs to a user.
    }

}
