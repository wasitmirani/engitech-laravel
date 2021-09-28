<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontEndController;

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

Route::get('/', [FrontEndController::class,'index']);
Route::get('/about', [FrontEndController::class,'about']);
Route::get('/team', [FrontEndController::class,'team']);
Route::get('/shop',[FrontEndController::class,'shop']);
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.cart');
Route::get('/products', [FrontEndController::class, 'products'])->name('products');
Route::get('/product/{slug}/{id}', [FrontEndController::class, 'singleProduct'])->name('product.view');
Route::get('/my-cart',[CartController::class,'myCart'])->name('my-cart');
Route::get('/remove/cart/{id}',[CartController::class,'removeCart'])->name('remove.cart');
Route::get('/mycart/view',[CartController::class,'mycartView'])->name('mycart.view');
Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout');
Route::get('thank-you',[FrontEndController::class,'thankYou'])->name('thankyou');

// Route::get('/', function () {
//     return view('welcome');
// });
