<?php

use App\Models\Product;
use App\Models\Category;
use App\Models\ImagePath;
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

Route::get('products', [ProductController::class, 'allProducts']);

Route::get('products/{product:slug}', [ProductController::class, 'productDetails']); //Product::where ('slug', $product)->first() | firstOrFail()

Route::get('categories/{category:slug}', function (Category $category){
    return view('products', [
        'products' => $category->products
        
    ]);
});

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});
Route::get('product', function () {
    return view('product');
});
Route::get('product01', function () {
    return view('product_detail');
});
Route::get('cart', function () {
    return view('cart');
});

Route::get('create-product', function (Category $category) {
    return view('admin.create_product', [
        'categories' => $category->all()
    ]);
});

//Landing page
Route::get('/', function () {
    return view('landing_page');
});

//Login page
Route::get('/login', function () {
    return view('login');
});

//Register page
Route::get('register', function () {
    return view('/register');
});
Route::get('product', function () {
    return view('product');
});

//Product detail
Route::get('product01', function () {
    return view('product_detail');
});

//Cart
Route::get('/cart', function () {
    return view('cart');
});

//Home page
Route::get('/home', function () {
    return view('home');
});

//Cart
Route::get('/cartAdmin  ', function () {
    return view('Admin.cart');
});
   
//View static
Route::get('/statistic', function () {
    return view('statistic');
 });
    
 //Admin
Route::get('/showAdmin', function () {
    return view('admin.showAdmin');
});

//Update of Admin
Route::get('/updateAdmin', function () {
    return view('admin.updateAdmin');
});

Route::get('/createAdmin', function () {
    return view('admin.createNewAdmin');
});

//Phone
Route::get('/showProduct', function () {
    return view('Fashion.showProduct');
});

//Create product
Route::get('/createNewProduct', function () {
    return view('Fashion.createNewProduct');
});

//Update product
Route::get('/updateProduct', function () {
    return view('Fashion.updateProduct');
});

//Accessory
Route::get('/showCustomer', function () {
    return view('Customer.showCustomer');
});

//Create information of customer
Route::get('/createCustomer', function () {
    return view('Customer.createNewCustomer');
});

Route::post('create_product', [ProductController::class, 'createProduct']);

Route::get('admin-products', [ProductController::class, 'viewProduct']);
Route::post('filter-by-category', [ProductController::class, 'filterByCategory']);