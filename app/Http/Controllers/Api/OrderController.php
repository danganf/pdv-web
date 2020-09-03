<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\MyClass\SrvCep;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create( Request $request ){
        dd($request->all());
        //return msgJson( $srvCep->search( $cep ) );
    }
}
