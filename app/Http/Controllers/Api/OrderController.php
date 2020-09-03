<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\MyClass\SrvCep;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create( Request $request, OrderRepository $orderRepository ){
        $orderRepository->createOrUpdate( $request->get('json') );
        if( !$orderRepository->getMsgError() ){
            return msgSuccessJson('OK');
        }
        return msgErroJson($orderRepository->getMsgError());
    }
}
