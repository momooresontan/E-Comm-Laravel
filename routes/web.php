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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::post('/login', [UserController::class, 'login']);

Route::get('/', [ProductController::class,'index']);

Route::get('/products/{product}', [ProductController::class, 'show']);

Route::post('/add-to-cart', [ProductController::class, 'addToCart']);

Route::get('/cart-list', [ProductController::class, 'showCart']);

