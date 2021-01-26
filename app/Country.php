<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $guarded = [];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function pages()
	{
		return $this->hasMany('App\Page');
	}
}
