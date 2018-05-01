<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
	protected $fillable = [
		'name',
		'description',
		'company_id',
		'user_id',
		'days',
	]

	public function users(){
        return $this->belongsTo(App\Model\User);//A task belongs to a user.
    }

    public function companies(){
        return $this->belongsTo(App\Model\Company);
    }
}
