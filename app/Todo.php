<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	protected $guarded = array();
	
	public function getCompletedAttribute($value) 
	{
		return (boolean) $value;
	}
}
