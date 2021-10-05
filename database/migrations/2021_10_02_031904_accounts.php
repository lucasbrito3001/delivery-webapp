<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('nickname');
            $table->string('email');
            $table->string('zipCode');
            $table->string('street');
            $table->string('number');
            $table->string('district');
            $table->string('city');
            $table->string('complement');
            $table->string('creditCard');
            $table->string('cardSecurityCode');
            $table->string('cardName');
            $table->string('cardValidate');
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
