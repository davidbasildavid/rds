<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;

	protected $guarded = [];

	public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

	public function steps()
	{
		return $this->hasMany('App\Step');
	}

}
