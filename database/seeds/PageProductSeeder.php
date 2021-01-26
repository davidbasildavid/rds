<?php

use Illuminate\Database\Seeder;

class PageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for($x = 1; $x < 4; $x++){
			DB::table('page_product')->insert([
				'page_id' => 1,
				'product_id' => $x
			]);
		}
    }
}
