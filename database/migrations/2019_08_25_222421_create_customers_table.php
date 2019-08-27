<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("apellido");
            $table->string('avatar');
            $table->string("domicilio");
            $table->unsignedBigInteger("users_id");
            $table->timestamps();

        });
        Schema::table('customers', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users');


    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
