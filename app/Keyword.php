<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
	protected $guarded = [];

	public function page()
	{
		return $this->belongsTo('App\Page');
	}
}
