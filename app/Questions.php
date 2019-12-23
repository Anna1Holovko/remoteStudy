<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{

	//
	protected $table = 'questions';
	protected $table = 'questions_id';

	public function options()
	{
		return $this->hasMany('App\Answers', 'questions_id');
	}
}
