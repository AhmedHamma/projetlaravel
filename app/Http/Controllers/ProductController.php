<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product(){
        return view('product-list');
    }

    function productId($id){
        return view('product-details', ['nom'=> $id]);
    }
}


