<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('product.index');
    }

    public function show($product_id){
        return view('product.show', [
            'product_id' => $product_id
        ]);
    }

    public function edit($product_id){
        return view('product.edit', [
            'product_id' => $product_id
        ]);
    }

    public function update($product_id){

    }

    public function destroy($product_id){

    }
}
