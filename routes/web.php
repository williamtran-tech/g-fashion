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

// Route::get('/', function () {
//     return view('users.landing_page');
// });

// Route::get('/login', function () {
//     return view('users.login');
// });

// Route::get('register', function () {
//     return view('register');
// });
// Route::get('product', function () {
//     return view('product');
// });
// Route::get('product01', function () {
//     return view('users.product_detail');
// });
// Route::get('cart', function () {
//     return view('cart');
// });

Route::get('create-product', function (Category $category) {
    return view('admin.create_product', [
        'categories' => $category->all()
    ]);
});

//Landing page
Route::get('/', function () {
    return view('users.landing_page');
});

//Login page
Route::get('/login', function () {
    return view('users.login');
});

//Register page
Route::get('register', function () {
    return view('users.register');
});
Route::get('product', function () {
    return view('users.product');
});

//Product detail
Route::get('product01', function () {
    return view('users.product_detail');
});

//Cart
Route::get('/cart', function () {
    return view('users.cart');
});

//Home page
Route::get('/home', function () {
    return view('home');
});

//Cart
Route::get('/cartAdmin  ', function () {
    return view('admins.admin.cart');
});
   
//View static
Route::get('/statistic', function () {
    return view('admins.statistic');
 });
    
 //Admin
Route::get('/showAdmin', function () {
    return view('admins.admin.showAdmin');
});

//Update of Admin
Route::get('/updateAdmin', function () {
    return view('admins.admin.updateAdmin');
});

Route::get('/createAdmin', function () {
    return view('admins.admin.createNewAdmin');
});

//Phone
Route::get('/showProduct', [ProductController::class, 'viewProducts']);

//Create product
Route::get('/createNewProduct', function () {
    return view('admins.Fashion.createNewProduct');
});

//Update product
Route::get('/updateProduct', function () {
    return view('admins.Fashion.updateProduct');
});

//Accessory
Route::get('/showCustomer', function () {
    return view('admins.Customer.showCustomer');
});

//Create information of customer
Route::get('/createCustomer', function () {
    return view('admins.Customer.createNewCustomer');
});

Route::post('create_product', [ProductController::class, 'createProduct']);

Route::get('admin-products', [ProductController::class, 'viewProduct']);
Route::post('filter-by-category', [ProductController::class, 'filterByCategory']);


//Fetch data
Route::get('fetch-products',[ProductController::class, 'fetchProduct']);

//Update product route
Route::get('update-product/{id}', [ProductController::class, 'editProduct']);
Route::put('update-product/{id}', [ProductController::class, 'updateProduct']);