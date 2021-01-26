<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('orders')->insert([
			'product_id' => 1,
			'full_name' => 'Chad Bunderstorm',
			'email' => 'chad@gmail.com',
			'address' => 'Broadway 123, NY, Usa',
			'price' => 800,
			'comments' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'status' => 75,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('orders')->insert([
			'product_id' => 2,
			'full_name' => 'Stacey Brown',
			'email' => 'stacey@gmail.com',
			'address' => 'Hallway Avenue 123, LA, Usa',
			'price' => 1000,
			'status' => 45,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('orders')->insert([
			'product_id' => 3,
			'full_name' => 'James Young',
			'email' => 'james@gmail.com',
			'address' => 'Englewood 34, London, UK',
			'price' => 1200,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('orders')->insert([
			'product_id' => 1,
			'full_name' => 'Junger Graz',
			'email' => 'junger@gmail.com',
			'address' => 'OverstadtStrase 2, Vienna, Austri',
			'price' => 800,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
    }
}
