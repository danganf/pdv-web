<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOrderItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('order_id')->unsigned()->comment('id do pedido');
            $table->integer('product_id')->unsigned()->comment('id do produto');
            $table->integer('qty')->nullable()->default(1)->comment('quantidade comprada');
            $table->decimal('price', 10, 2)->nullable()->default(1)->comment('preço unitário');

            $table->unique(['order_id','product_id']);

            $table->foreign('order_id')->references('id')->on('order');
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
        Schema::dropIfExists('order_item');
    }
}
