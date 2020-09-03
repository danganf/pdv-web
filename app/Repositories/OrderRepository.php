<?php

namespace App\Repositories;

use DanganfTools\MyClass\Json\Contracts\JsonAbstract;
use DanganfTools\Repositories\Contracts\RepositoryAbstract;
use Illuminate\Support\Facades\DB;

class OrderRepository extends RepositoryAbstract{

    public function __construct()
    {
        parent::__construct( __CLASS__ );
        return $this;
    }

    public function createOrUpdate(JsonAbstract $json)
    {
        $this->set('zip_code',$json->get('zip_code'));
        $this->set('address',$json->get('address'));
        $this->set('number',$json->get('number'));
        $this->set('comp',$json->get('comp'));
        $this->set('neighborhood',$json->get('neighborhood'));
        $this->set('city',$json->get('city'));
        $this->set('uf',$json->get('uf'));
        $this->set('total_price',$json->get('total_price'));

        $items = [];
        foreach( $json->get('items') as $key => $row ){
            $modelProduct = $this->getModel()->items()->getRelated()->product()->getRelated();
            $resultProd = $modelProduct->where('sku', $row->sku)->select('id','price')->first();
            if( !empty( $resultProd ) ){
                $resultProd = $resultProd->toArray();
                $items[$key]['product_id'] = $resultProd['id'];
                $items[$key]['price'] = (float)$resultProd['price'];
                $items[$key]['qty'] = $row->qty;
            } else {
                $this->setMsgError(\Lang::get('default.product_not_found'));
                break;
            }
        }

        DB::beginTransaction();
        try{
            $this->save();
            foreach (  $items  as $row ) {
                $modelItem = $this->getModel()->items()->getRelated();
                foreach ($row as $key => $value) {
                    $modelItem->{$key} = !is_null($value) ? (string) $value : null;
                }                
                $this->getModel()->items()->save($modelItem);
            }
            $return = [ 'id' => $this->get('id') ];
        } catch ( \Exception $e ){
            DB::rollback();
            $this->setMsgError(\Lang::get('default.create_order_error'));
        }

        DB::commit();

        return !$this->getMsgError() ? $return : false;
    }

}