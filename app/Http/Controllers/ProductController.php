<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('index', ['products' => $product]);
    }
    public function show(Product $product){
        //$data = Product::find($product);
        return view('show', ['product' => $product]);
    }
    public function addToCart(Request $request){
        if($request->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')->id;
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    public static function cartItem(){
        $userId = Session::get('user')->id;
        return Cart::where('user_id', $userId)->count();
    }
}
