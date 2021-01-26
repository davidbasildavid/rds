<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
	$title = $faker->sentence(3);
	$slug = Str::slug($title, '-');

    return [
		'title' => $title,
		'slug' => $slug,
		'price' => $faker->numberBetween(100, 3000),
		'info' => $faker->sentence(120)
    ];
});
