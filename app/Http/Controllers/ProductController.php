<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product(){
        return "Liste des produits";
    }

    function productId($id){
        return "Fiche du produit {$id}";
    }
}


