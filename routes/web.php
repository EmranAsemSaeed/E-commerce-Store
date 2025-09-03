<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/shop', [ShopController::class, 'index']);
use App\Http\Controllers\StoreController;

Route::get('/', [StoreController::class, 'index'])->name('shop.index');
Route::get('/products', [StoreController::class, 'products'])->name('shop.products');
Route::get('/products/{id}', [StoreController::class, 'productDetails'])->name('shop.productDetails');
Route::get('/cart', [StoreController::class, 'cart'])->name('shop.cart');
Route::get('/about', [StoreController::class, 'about'])->name('shop.about');
Route::get('/contact', [StoreController::class, 'contact'])->name('shop.contact');
