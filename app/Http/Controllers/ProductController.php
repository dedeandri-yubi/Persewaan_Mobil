<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $response = Http::get('https://dummyjson.com/products');
        $json = $response->json();
        return view('product.index',['products' => $json['products']]);
    }

    public function show($id)
    {
        $response = Http::get('https://dummyjson.com/products/'.$id);
        $product = $response->json();
        return view('product.show',['product' => $product]);
    }


}
