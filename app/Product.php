<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function pages()
	{
		return $this->belongsToMany('App\Page');
	}
}
