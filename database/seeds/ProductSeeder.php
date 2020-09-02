<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [];
        $dados[] = [ 'name' => 'California Salada Chicken', 'sku' => '010101', 'price' => 24.90 ];
        $dados[] = [ 'name' => 'FRESH Chicken Abacaxi', 'sku' => '010209', 'price' => 22.89 ];
        $dados[] = [ 'name' => 'POKE Atum Special', 'sku' => '223344', 'price' => 32.90 ];
        $dados[] = [ 'name' => 'POKE Camarão', 'sku' => '332244', 'price' => 27.90 ];
        $dados[] = [ 'name' => 'AÇAÍ @500ML', 'sku' => '112233', 'price' => 22.00 ];
        $dados[] = [ 'name' => 'Farofa cebola', 'sku' => '339988', 'price' => 7.60 ];
        $dados[] = [ 'name' => 'Bobó Cogumelo & Palmito', 'sku' => '342321', 'price' => 20.90 ];
        $dados[] = [ 'name' => 'Bolo de Maça & Canela INTEGRAL', 'sku' => '34de56', 'price' => 9.60 ];
        $dados[] = [ 'name' => 'Bolo de Milho e Banana Passas', 'sku' => 'bolo2233', 'price' => 9.20 ];
        $dados[] = [ 'name' => 'Brownie Fit Amendoim', 'sku' => 'b4532', 'price' => 9.00 ];
        $dados[] = [ 'name' => 'CANELONE BERINGELA QUATRO QUEIJOS', 'sku' => '45675', 'price' => 31.99  ];
        $dados[] = [ 'name' => 'Canja Special', 'sku' => '23cd22', 'price' => 11.90 ];
        $dados[] = [ 'name' => 'Café expresso', 'sku' => '123098', 'price' => 5.00 ];

        $now = \Carbon\Carbon::now();

        foreach ( $dados AS $row ){
            $row['created_at'] = $now;
            $row['updated_at'] = $now;
            \Illuminate\Support\Facades\DB::table('product')->insert( $row );
        }
    }
}
