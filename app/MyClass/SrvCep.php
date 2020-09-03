<?php
namespace App\MyClass;

use DanganfTools\MyClass\Curl;

class SrvCep{

    private $url = 'https://viacep.com.br/ws/{CEP}/json/';
    private $curl;
    private $fields = [ 
        'cep' => 'zip_code', 
        'logradouro' => 'address', 
        'complemento' => 'comp', 
        'bairro' => 'neighborhood', 
        'localidade' => 'city', 
        'uf' => 'uf', 
    ];

    public function __construct( Curl $curl )
    {
        $this->curl = $curl;
    }

    public function search( $cep ){
        $cep = trim( only_number( $cep ) );
        $result = null;
        $return = $this->curl->send( str_replace('{CEP}', $cep, $this->url) );
        if( $return['HTTP_CODE'] === 200 ){
            $array = json_decode( $return['RESULT'], true );
            if( !array_has( $array, 'erro' ) ){
                foreach( $this->fields as $key => $keyNew ){ 
                    $result[$keyNew] = array_get( $array, $key );
                }
            }
        }
        return $result;
    }

}