<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Order::class, function (Faker $faker) {
    return [
		'product_id' => $faker->numberBetween(1, 3),
		'full_name' => $faker->firstName . ' ' . $faker->lastName,
		'email' => $faker->email,
		'address' => $faker->address,
		'price' => $faker->numberBetween(100, 3000),
		'comments' => $faker->sentence(12),
		'created_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
