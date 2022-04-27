<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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

    //Admin functions
    //Create new product
    function createProduct(Request $request){
        $this->validate($request, [
            'name' => 'required | max:2048| regex:/^[a-zA-Z]+$/u'
        ]);

        $product = new Product;

        //Insert data from form to database
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->save();

        return redirect()->back()->with('success', 'Create product successfully.');   
    }
    
    //View product and update
    function viewProduct(){
        return view('admin.products', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }

    function filterByCategory(Request $request){
        return view('admin.products', [
            'products' => Product::where('category_id', $request->category)->get(),
            'categories' => Category::all()
        ]);
    }
}