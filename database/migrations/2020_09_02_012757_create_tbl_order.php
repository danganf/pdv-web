<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('zip_code', 8)->comment('cep');
            $table->text('address', 100)->comment('endereço');
            $table->text('number', 20)->nullable()->comment('Número');
            $table->text('comp', 80)->nullable()->comment('Complemento');
            $table->text('neighborhood', 50)->comment('Bairro');
            $table->text('city', 50)->comment('Cidade');
            $table->text('uf', 2)->comment('UF');
            $table->decimal('total_price', 10, 2)->comment('Valor da venda');
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
        Schema::dropIfExists('order');
    }
}
