<?php

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [];
        $dados[] = [ 'name' => 'César e Eduarda Transportes Ltda' ];
        $dados[] = [ 'name' => 'Sara e Henrique Alimentos Ltda' ];
        $dados[] = [ 'name' => 'Guilherme e Carolina Buffet ME' ];
        $dados[] = [ 'name' => 'Raul e Nicole Marketing ME' ];
        $dados[] = [ 'name' => 'Isabella e Hugo Restaurante ME' ];
        $dados[] = [ 'name' => 'Paulo e Matheus Pizzaria ME' ];
        $dados[] = [ 'name' => 'Iago e Augusto Buffet ME' ];
        $dados[] = [ 'name' => 'Beatriz e Augusto Restaurante Ltda' ];

        $now = \Carbon\Carbon::now();

        foreach ( $dados AS $row ){
            $row['created_at'] = $now;
            $row['updated_at'] = $now;
            \Illuminate\Support\Facades\DB::table('provider')->insert( $row );
        }
    }
}
