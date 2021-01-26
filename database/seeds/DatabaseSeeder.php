<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call([
			PageSeeder::class,
			CountrySeeder::class,
			UserSeeder::class,
			ProductSeeder::class,
			OrderSeeder::class,
			PageProductSeeder::class,
			SettingSeeder::class,
			ConsultationSeeder::class,
		]);
    }
}
