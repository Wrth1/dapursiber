<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function showProductPage(){
        return view('product');
    }

    public function addProduct(){
        // add new data ke database product
    }
}
