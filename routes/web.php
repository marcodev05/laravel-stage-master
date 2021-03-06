<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'] );

Route::get('/home', [HomeController::class, 'homeview'] );

Route::get('/add_product', [AdminController::class, 'addProductView'] );

Route::resource('products', ProductController::class);

Route::get('/edit_product/{id}', [AdminController::class, 'editProductView'] );

Route::delete('/delete_ordeline/{orderline}', [CartController::class, 'deleteOrderLine'] )->name('orderline.delete');

Route::resource('carts', CartController::class);

Route::get('/checkout', [CartController::class, 'checkout']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
