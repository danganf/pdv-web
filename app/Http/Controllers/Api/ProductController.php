<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function filter( Request $request, ProductRepository $productRepository ){
        return msgJson( $productRepository->filter() );
    }
}
