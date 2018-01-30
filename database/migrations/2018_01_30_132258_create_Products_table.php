<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function(Blueprint $table) {
        $table->increments('id');
        $table->string('nome', 60);
        $table->string('cod_barras')->unique();
        $table->string('fabricante');
        $table->integer('Providers_id')->unsigned();
        $table->foreign('Providers_id')->references('id')->on('Providers');
        $table->softDeletes();
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
        Schema::dropIfExists('Products');
    }
}
