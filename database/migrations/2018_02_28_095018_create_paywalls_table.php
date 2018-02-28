<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaywallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paywalls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IBAN');
            $table->string('BIC');
            $table->integer('mandaatid');
            $table->dateTime('mandaatdatum');
            $table->integer('bedrag');
            $table->string('naam');
            $table->string('beschrijving');
            $table->string('endtoendid');
            $table->timestamps();
        });

        Schema::create('paywall_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paywall_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('paywall_id')->references('id')->on('paywalls');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paywalls');
    }
}
