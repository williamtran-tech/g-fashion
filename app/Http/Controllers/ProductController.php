<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function allProducts(){
        return view('users.products', [
            'products' => Product::all()]);
    }

    public function productDetails(Product $product){
        return view('users.product_detail', [
            'product' => $product
        ]);
    }

    //Admin functions
    //Create new product
    function creatingProduct(){
        return view('admins.Fashion.createNewProduct', [
            'categories' => Category::all()
        ]);
    }

    function createProduct(Request $request){
        // $this->validate($request, [
        //     'name' => 'required | max:2048| regex:/^[a-zA-Z]+$/u'
        // ]);

        $product = new Product;

        //Insert data from form to database
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->cost = $request->cost;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->save();

        // return redirect()->back()->with('success', 'Create product successfully.');

        return redirect('/showProduct');
    }
    
    //View product and update
    // function viewProduct(){
    //     return view('admin.products', [
    //         'products' => Product::all(),
    //         'categories' => Category::all()
    //     ]);
    // }

    function filterByCategory(Request $request){
        return view('admin.products', [
            'products' => Product::where('category_id', $request->category)->get(),
            'categories' => Category::all()
        ]);
    }

    //Admin page
    function viewProducts(){
        return view('admins.Fashion.showProduct', [
            // 'products' => Product::all(),
            'categories' => Category::all()
        ]
        );
    }

    public function fetchProduct(){
        // Join two table by using Eloquent
        $products = Product::join('categories', 'categories.id', '=' ,'products.category_id')->get(['products.*', 'categories.name AS category_name']);
        return response()->json([
            'products'=>$products,
        ]);
    }

    function editProduct($id){
        $product = Product::find($id);
        if ($product){
            return response()->json([
                'status'=>200,
                'product'=>$product,
            ]);
        }
        else {
            return response()->json([
                'status'=>404,
                'message'=>'Product Not Found.'
            ]);
        }
    }

    function updateProduct(Request $request, $id){
        // //Validate input
        // $validator = $this->validate($request, [
        //     'name' => 'required | max:2048'
        // ]);

        // if($validator->fails){
        //     return response()->json([
        //        'status' => 400,
        //        'errors' => validate()->message() 
        //     ]);
        // }
        // else {
            $product = Product::find($id);

            //Check product exist or not
            if ($product){
                //Update product
                $product->name = $request->name;
                $product->slug = $request->slug;
                $product->price = $request->price;
                $product->cost = $request->cost;
                $product->quantity = $request->quantity;
                $product->description = $request->description;
                $product->category_id = $request->category_id;
                $product->update();

                return response()->json([
                    'status' => 200,
                    'message' => 'Product updated successfully.' 
                ]);
            }
            else {
                return response()->json([
                    'status'=>404,
                    'message'=>'Product Not Found.'
                ]);
            }
        // }
    }

    function destroyProduct($id){
        $product = Product::find($id);
        $product->delete();
        return response()->json([
            'status'=>200,
            'message'=>"Product deleted successfully"
        ]);
    }
}