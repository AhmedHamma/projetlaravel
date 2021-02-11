<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('product-list', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|gte:1',
            'quantity' => 'required|min:1',
            'picture' => 'required',
            'weight' => 'required|min:1',
            'description' => 'required|min:5',

        ]);
        $produit = new Product();
        $produit->name = $request->name;
        $produit->description = $request->description;
        $produit->price = $request->price;
        $produit->picture = $request->image;
        $produit->weight = $request->weight;
        $produit->quantity = $request->quantity;
        $produit->available = $available=1;
        $produit->category_id = $category_id=1;
        $produit->save();

        return redirect('product/'.$produit->id);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

//        on retourne la vue d'un produit en particulier grace a l'id
        if ($product = Product::find($id)) {
            return view('product-details', ['product' => $product]);
        } else {
            abort(404);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($product = Product::find($id)){
        return view('backoffice.modif', ['product' => $product]);
    }else{
        abort(404);
    }}

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit = Product::find($id);
        $produit->name = $request->name;
        $produit->description = $request->description;
        $produit->price = $request->price;
        $produit->picture = $request->image;
        $produit->weight = $request->weight;
        $produit->quantity = $request->quantity;
        $produit->save();

        return redirect('product/' . $produit->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('product');
    }

}
//    public function product()
//    {
//        $products = DB::select('select * from products');
//    }
//    public function product_list_sortByname(){
//        $products = Product::orderBy('name')->get();
//        return view('product-list', ['products'=>$products]);
//    }
//    public function product_list_sortByPrice(){
//        //$products = DB::select('SELECT * FROM products');
//        $products = Product::all()->sortBy('price');
//        return view('product-list', ['products'=>$products]);
//    }
//    public function product_list_OneProduct($id){
//        $products = Product::all()->find($id);
//        return view('product-details', ['product'=>$products]);
//    }
////    public function product()
////    {
////        $products = DB::select('select * from products');
////
////
////        return view('product-list', ['product' => $products]);
////
////    }
//
//    public function productId($id)
//    {
//        $product = DB::selectOne('select * from products where id=?',[$id]);
//        return view('product-details', ['id'=> $id,'product'=>$product]);
//    }
//









