<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $guarded = [];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function images()
	{
		return $this->hasMany('App\Image');
	}

	public function products()
	{
		return $this->belongsToMany('App\Product');
	}

	public function keywords()
	{
		return $this->hasMany('App\Keyword');
	}

	public function country()
	{
		return $this->belongsTo('App\Country');
	}
}
