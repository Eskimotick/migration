<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product_Stores', function(Blueprint $table) {
        $table->increments('id');
        $table->integer('estoque')->unsigned()->default(0);
        $table->float('preco');
        $table->integer('Products_id')->unsigned;
        $table->foreign('Products_id')->references('id')->on('Products')->onDelete('cascade');
        $table->integer('Stores_id')->unsigned;
        $table->foreign('Stores_id')->references('id')->on('Stores')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product_Stores');
    }
}
