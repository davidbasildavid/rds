<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
		DB::table('consultations')->insert([
			'date' => $faker->date($max='2020-12-01'),
			'time' => $faker->time($max='20:00'),
			'full_name' => $faker->name,
			'email' => $faker->email,
			'phone' => $faker->phoneNumber
		]);

		DB::table('consultations')->insert([
			'date' => $faker->date($max='2020-11-16'),
			'time' => $faker->time($max='16:45'),
			'full_name' => $faker->name,
			'email' => $faker->email,
			'phone' => $faker->phoneNumber
		]);

		DB::table('consultations')->insert([
			'date' => $faker->date($max='2020-11-16'),
			'time' => $faker->time($max='16:45'),
			'full_name' => $faker->name,
			'email' => $faker->email,
			'phone' => $faker->phoneNumber
		]);
    }
}
