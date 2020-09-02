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

    public function filter( $params = [] ){
        $this->setWith('providers', 'name');
        
        return $this->search();            
    }

    public function createOrUpdate(JsonAbstract $arrayValores)
    {
        
    }

}