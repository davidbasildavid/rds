<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('settings')->insert([
			'name' => 'DRS consulting',
			'email' => 'info@drsconsulting.com',
			'logo' => 'global/logo.png',
			'phone' => '+12328399',
			'address' => '123 Broadway, NYC, USA',
			'ceo' => 'David Basil'
		]);
    }
}
