<?php

namespace App\Repositories;

use DanganfTools\MyClass\Json\Contracts\JsonAbstract;
use DanganfTools\Repositories\Contracts\RepositoryAbstract;

class ProductRepository extends RepositoryAbstract{

    public function __construct()
    {
        parent::__construct( __CLASS__ );
        return $this;
    }

    public function filter( $term = null ){
        $this->setWith('providers', 'name');
        if( $term ){
            $this->setWhere("name like '%$term%'");
            $this->setWhere("sku ='$term'", 'or');
        }    
        return $this->search();            
    }

    public function createOrUpdate(JsonAbstract $arrayValores)
    {
        
    }

}