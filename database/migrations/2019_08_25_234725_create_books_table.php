<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titulo");
            $table->string("Autor");
            $table->unsignedInteger("stock");
            $table->unsignedDecimal("price", 8, 2);
            $table->timestamps();
            $table->unsignedBigInteger("category_id");
        });
        Schema::table('books', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories_tabla');

});

}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
