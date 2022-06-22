<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [ProductController::class, 'banner']);

// product route 

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::patch('/product/{id}', [ProductController::class, 'update']);
Route::delete('product/{id}', [ProductController::class, 'destroy']);

//product viewer

Route::get('/shop', [ProductController::class, 'shopView']);
Route::get('/view/{id}', [ProductController::class, 'viewer']);

// cart 

Route::post('/carts', [CartController::class, 'store']);
Route::get('/pesanan/{userid}', [CartController::class, 'index']);
Route::get('cart/{id}/{productid}', [CartController::class, 'check']);
Route::delete('cart/{id}', [CartController::class, 'destroy']);


//orders 
Route::get('/orders', [OrderController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('clear/{id}/{param}/{sisa}/{product}', [OrderController::class, 'destroy']);
Route::get('/pesan/{userid}', [OrderController::class, 'pesanan']);

Route::get('/status/{id}/user', [OrderController::class, 'userStatus']);
Route::patch('/status/{id}/user', [OrderController::class, 'userStatusUpdate']);

Route::get('/admin/order', [OrderController::class, 'adminOrder']);
Route::get('/status/{id}/', [OrderController::class, 'statusEdit']);
Route::patch('/status/{id}/edit', [OrderController::class, 'statusUpdate']);



Route::get('/cart', function () {
    return view('product.detailPesanan');
});




// Route::get('/createproduct', function () {
//     return view('admin.createProduct');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
