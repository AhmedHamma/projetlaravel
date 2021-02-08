<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

<<<<<<< HEAD
=======

use App\Models\Product;

>>>>>>> 35004dc2fc05199db0afc248176383a58844b8f2
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
<<<<<<< HEAD
    function product()
    {
        $products = DB::select('select * from products');
=======
    public function product_list_sortByname(){
        $products = Product::all()->sortBy('name');
        return view('product-list', ['products'=>$products]);
    }
    public function product_list_sortByPrice(){
        //$products = DB::select('SELECT * FROM products');
        $products = Product::all()->sortBy('price');
        return view('product-list', ['products'=>$products]);
    }
    public function product_list_OneProduct($id){
        $products = Product::all()->find($id);
        return view('product-details', ['product'=>$products]);
    }
    function product()
    {
        $products = DB::select('select * from products');


>>>>>>> 35004dc2fc05199db0afc248176383a58844b8f2
        return view('product-list', ['product' => $products]);

    }

    public function productId($id)
    {
        $product = DB::selectOne('select * from products where id=?',[$id]);
        return view('product-details', ['id'=> $id,'product'=>$product]);
    }
}




