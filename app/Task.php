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
    ]

    public function users(){
        return $this->belongsTo(App\Model\User);//A task belongs to a user.
    }

    public function projects(){
        return $this->belongsTo(App\Model\Project);
    }

    public function companies(){
        return $this->belongsTo(App\Model\Company);
    }
}
