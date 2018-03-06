<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Analytics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('analytics', function (Blueprint $table){
        $table->increments('id');
        $table->integer('article_id');
        $table->integer('user_id');
        $table->decimal('viewtime', 5, 4);
        $table->string('navigation');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
