<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function product()
    {
        $products = DB::select('select * from products');
        return view('product-list', ['product' => $products]);

    }

    public function productId($id)
    {
        $product = DB::selectOne('select * from products where id=?',[$id]);
        return view('product-details', ['id'=> $id,'product'=>$product]);
    }
}




