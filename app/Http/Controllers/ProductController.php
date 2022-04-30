<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ImagePath;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;


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

    public function productByCategory(Category $category){
        return view('users.products', [
            'products' => $category->products
        ]);
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

    //ADMIN PAGE
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

    //Admin functions
    //Create new product
    function creatingProduct(){
        return view('admins.Fashion.createNewProduct', [
            'categories' => Category::all()
        ]);
    }

    function createProduct(Request $request){
        if($request->hasFile('cover_img')!=null){
            $file = $request->file('cover_img');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $product = new Product;

            //Insert data from form to database
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->price = $request->price;
            $product->cost = $request->cost;
            $product->quantity = $request->quantity;
            $product->description = $request->description;
            $product->category_id = $request->category;
            $product->cover_img = $imageName;
            
            $product->save();
        }

        if ($request->hasFile('images')!=null){
            $files = $request->file("images");
            foreach($files as $file){
                $imageName = time().'_'.$file->getClientOriginalName();
                $request['product_id'] = $product->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"),$imageName);
                ImagePath::create($request->all());
            }
        }
        
        return redirect('/showProduct');
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
    
    // Delete product 
    function destroyProduct($id){
        $product = Product::find($id);
        $product->delete();
        
        File::delete(public_path("cover/".$product->cover_img));
        
        $images = ImagePath::where('product_id', $id)->get();
        foreach($images as $image){
            File::delete(public_path("images/".$image->image));
            $image->delete();
        }

        return response()->json([
            'status'=>200,
            'message'=>"Product deleted successfully"
        ]);
    }
}