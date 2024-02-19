<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
        return 'hello';
    }
}
