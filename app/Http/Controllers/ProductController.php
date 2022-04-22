<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function allProducts(){
        return view('products', [
            'products' => Product::all()]);
    }

    public function productDetails($id){
        return view('product', [
            'product' => Product::findOrFail($id)
         ]);
    }
}