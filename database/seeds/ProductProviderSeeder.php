<?php

use Illuminate\Database\Seeder;

class ProductProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [];
        $dados[] = [ 'product_id' => 1, 'provider_id' => 1 ];
        $dados[] = [ 'product_id' => 1, 'provider_id' => 2 ];
        $dados[] = [ 'product_id' => 1, 'provider_id' => 3 ];

        $dados[] = [ 'product_id' => 2, 'provider_id' => 8 ];
        $dados[] = [ 'product_id' => 2, 'provider_id' => 7 ];

        $dados[] = [ 'product_id' => 3, 'provider_id' => 4 ];

        $dados[] = [ 'product_id' => 4, 'provider_id' => 5 ];
        $dados[] = [ 'product_id' => 4, 'provider_id' => 6 ];

        $dados[] = [ 'product_id' => 5, 'provider_id' => 3 ];
        $dados[] = [ 'product_id' => 5, 'provider_id' => 7 ];

        $dados[] = [ 'product_id' => 6, 'provider_id' => 3 ];
        $dados[] = [ 'product_id' => 6, 'provider_id' => 2 ];
        $dados[] = [ 'product_id' => 6, 'provider_id' => 5 ];

        $dados[] = [ 'product_id' => 7, 'provider_id' => 6 ];
        
        $dados[] = [ 'product_id' => 8, 'provider_id' => 3 ];
        
        $dados[] = [ 'product_id' => 9, 'provider_id' => 2 ];
        $dados[] = [ 'product_id' => 9, 'provider_id' => 5 ];
        
        $dados[] = [ 'product_id' => 10, 'provider_id' => 4 ];
        $dados[] = [ 'product_id' => 10, 'provider_id' => 1 ];

        $dados[] = [ 'product_id' => 11, 'provider_id' => 8 ];
        $dados[] = [ 'product_id' => 11, 'provider_id' => 6 ];
        
        $dados[] = [ 'product_id' => 12, 'provider_id' => 8 ];
        
        $dados[] = [ 'product_id' => 13, 'provider_id' => 3 ];
        $dados[] = [ 'product_id' => 13, 'provider_id' => 6 ];

        foreach ( $dados AS $row ){
            \Illuminate\Support\Facades\DB::table('provider_product')->insert( $row );
        }
    }
}
