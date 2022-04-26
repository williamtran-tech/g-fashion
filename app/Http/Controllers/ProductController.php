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

    public function productDetails(Product $product){
        return view('product', [
            'product' => $product
         ]);
    }

    function createProduct(Request $request){
        $product = new Product;

        //Insert data from form to database
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->category_id = $request->category;
        echo $product->save(); 
    }
    
}