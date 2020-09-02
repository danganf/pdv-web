<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProviderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('provider_id')->unsigned();
            $table->integer('product_id')->unsigned();

            $table->primary(['provider_id','product_id']);

            $table->foreign('provider_id')->references('id')->on('provider');
            $table->foreign('product_id')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_product');
    }
}
