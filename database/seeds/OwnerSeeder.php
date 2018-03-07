<?php

use Illuminate\Database\Seeder;

// Seeder to create owner with access to admin section
class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'Admin',
    	'email' => 'admin@email.com',
    	'password' => bcrypt('miauw'),
    	'owner' => 1,
    	]);
    }
}
