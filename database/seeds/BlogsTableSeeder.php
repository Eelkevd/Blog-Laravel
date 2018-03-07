<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
        'user_id' => '3',
    	'title' => 'Jorik Blog',
    	'subject' => 'The world of Jorik',
    	]);

    	 DB::table('blogs')->insert([
        'user_id' => '4',
    	'title' => 'Eelke Blog',
    	'subject' => 'The world of Eelke',
    	]);

    	  DB::table('blogs')->insert([
        'user_id' => '5',
    	'title' => 'Esmeralda Blog',
    	'subject' => 'The world of Esmeralda',
    	]);
    }
}
