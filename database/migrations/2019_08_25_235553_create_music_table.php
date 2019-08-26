<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titulo");
            $table->string("autor");
            $table->unsignedDecimal("price", 8, 2);
            $table->unsignedInteger("stock");
            $table->timestamps();
            $table->unsignedBigInteger("category_id");
        });
        Schema::table('music', function (Blueprint $table) {
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
        Schema::dropIfExists('music');
    }
}
