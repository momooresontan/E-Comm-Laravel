<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

Route::get('/', [ProductController::class,'index']);

Route::get('/products/{product}', [ProductController::class, 'show']);

Route::post('/add-to-cart', [ProductController::class, 'addToCart']);

Route::get('/show-cart', [ProductController::class, 'showCart']);

Route::get('remove-from-cart/{id}', [ProductController::class, 'removeFromCart']);

Route::get('order-now', [ProductController::class, 'orderNow']);

Route::post('place-order', [ProductController::class, 'placeOrder']);

Route::get('my-order', [ProductController::class, 'myOrder']);




