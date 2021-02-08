<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;


use App\Models\Product;


use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function product()
    {
        $products = DB::select('select * from products');
    }
    public function product_list_sortByname(){
        $products = Product::orderBy('name')->get();
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
//    public function product()
//    {
//        $products = DB::select('select * from products');
//
//
//        return view('product-list', ['product' => $products]);
//
//    }

    public function productId($id)
    {
        $product = DB::selectOne('select * from products where id=?',[$id]);
        return view('product-details', ['id'=> $id,'product'=>$product]);
    }
}




