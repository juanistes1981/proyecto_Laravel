<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date("fechaPedido");
            $table->unsignedDecimal("price",  8, 2);
            $table->timestamps();
            $table->unsignedBigInteger("id_customers");

        });
        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('id_customers')->references('id')->on('customers');



    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
