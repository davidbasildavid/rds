<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
			'role' => 'admin',
			'name' => 'David Basil',
			'email' => 'admin@admin.com',
			'password' => Hash::make('admin')
		]);

		DB::table('users')->insert([
			'role' => 'client',
			'name' => 'Chad Fowler',
			'email' => 'chadfowler@gmail.com',
			'password' => Hash::make('1234')
		]);
    }
}
