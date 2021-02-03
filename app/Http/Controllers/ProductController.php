<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product()
    {
        return view('product-list');
    }

    function productId($id)
    {
        //'ahmed' => $username;
        return view('product-details', ['nom' => $id]);
    }
}

$products = DB::select('select * from products');
return view('product-list', ['products' => $products]);


