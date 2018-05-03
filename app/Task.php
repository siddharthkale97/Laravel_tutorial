<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
     	'name',
     	'user_id',
     	'project_id',
     	'days',
     	'hours',
     	'company_id',
    ];

    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function companies(){
        return $this->belongsTo('App\Company');
    }

    public function users(){
        return $this->belongsToMany('App\User');//A task belongs to many user.
    }

    public function comments(){
  		return $this->morphMany('App\Comment', 'commentable');
  	}
}
