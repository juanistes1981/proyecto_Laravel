<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidodetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidodetalle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedInteger("cantidad");
            $table->unsignedDecimal("price");
            $table->unsignedBigInteger("id_books");
            $table->unsignedBigInteger("id_music");
        });
        Schema::table('pedidodetalle', function (Blueprint $table) {
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
        Schema::dropIfExists('pedidodetalle');
    }
}
