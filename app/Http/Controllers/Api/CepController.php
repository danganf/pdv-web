<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\MyClass\SrvCep;
use Illuminate\Http\Request;

class CepController extends Controller
{
    public function filter( $cep, Request $request, SrvCep $srvCep ){
        return msgJson( $srvCep->search( $cep ) );
    }
}
