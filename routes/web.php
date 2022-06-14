<?php

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

Route::get('/', function () {
    return view('home');
});

// product route 

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product/{$id}', [ProductController::class, 'show']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{$id}/edit', [ProductController::class, 'edit']);
Route::patch('/product/{id}', [ProductController::class, 'update']);
Route::delete('product/{$id}', [ProductController::class, 'delete']);

// Route::get('/createproduct', function () {
//     return view('admin.createProduct');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
