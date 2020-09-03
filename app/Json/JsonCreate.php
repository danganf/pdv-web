<?php

namespace App\Json;

use DanganfTools\MyClass\Json\Contracts\JsonAbstract;
use DanganfTools\MyClass\Json\Contracts\JsonInterface;
use DanganfTools\MyClass\Validator;

class JsonCreate extends JsonAbstract implements JsonInterface
{
    private $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }
      
    public function set( $stringJson ) {
        $this->setReturnPadrao();
        $this->setJson( json_decode( $stringJson ) );
        $this->validRequiredFields($this->toArray());
        \Request::merge(['json'=>$this]);
    }

    public function validRequiredFields( $array ) {
        $this->trataDados();

        $fields = [ 'zip_code', 'address', 'city', 'neighborhood', 'uf' ];

        if ( !$this->validator->valid( $array , $fields ) ) {
            $this->error( $this->validator->error() );
        }
        
        dd('asasass');
        //$this->create('total_purchase_value', convert_string_float($this->get('total_purchase_value')) );

        
        return TRUE;
    }

    private function trataDados() {
        $this->get('zip_code');        
        $this->get('address');        
        $this->get('number');        
        $this->get('comp');        
        $this->get('city');        
        $this->get('neighborhood');        
        $this->get('uf');        
        $this->get('items',[]);
    }
}
