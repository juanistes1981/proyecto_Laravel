<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger("numcompra");
            $table->date("fechaCreado");
            $table->string("formaPago");
            $table->timestamps();
            $table->unsignedBigInteger("id_books");
            $table->unsignedBigInteger("id_music");
        });
        Schema::table('carrito', function (Blueprint $table) {
            $table->foreign('id_books')->references('id')->on('books');
            $table->foreign('id_music')->references('id')->on('music');

    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito');
    }
}
