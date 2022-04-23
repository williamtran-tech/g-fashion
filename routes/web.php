<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('products', [ProductController::class, 'allProducts']);

Route::get('products/{product:slug}', [ProductController::class, 'productDetails']); //Product::where ('slug', $product)->first() | firstOrFail()

Route::get('categories/{category:slug}', function (Category $category){
    return view('products', [
        'products' =>$category->products
    ]);
});

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('/register');
});
Route::get('product', function () {
    return view('product');
});