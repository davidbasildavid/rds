<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Consultation extends Model
{
	protected $guarded = [];
	/* public function getDateAttribute() */
	/* { */
	/* 	return date('Y-M-d', strtotime($this->attributes['date'])); */
	/* } */

	public function getTimeAttribute()
	{
		return date('H:i', strtotime($this->attributes['time']));
	}
}
