<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        DB::table('users')->insert([
        'name' => 'Jorik',
    	'email' => 'Jorik@example.com',
    	'password' => bcrypt('Jorik'),
    	'owner' => 0,
    	]);

    	DB::table('users')->insert([
        'name' => 'Eelke',
    	'email' => 'Eelke@example.com',
    	'password' => bcrypt('Eelke'),
    	'owner' => 0,
    	]);

    	DB::table('users')->insert([
        'name' => 'Esmeralda',
    	'email' => 'Esmeralda@example.com',
    	'password' => bcrypt('Esmeralda'),
    	'owner' => 0,
    	]);   
    }
}
