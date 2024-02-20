@extends('layout')

@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Cart</h4>
            <a href="order-now" class="btn btn-success text-uppercase">Order Now</a>
            <br>
            <br>
            @foreach($products as $product)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="products/{{ $product->id }}">
                            <img class="trending-image" src="{{ $product->gallery }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                            <div class="">
                                <h2>{{ $product->name }}</h2>
                                <h5>{{ $product->description }}</h5>
                            </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/remove-from-cart/{{ $product->cart_id }}" class="btn btn-danger text-uppercase">Remove from Cart</a>
                    </div>
                </div>
            @endforeach            
        </div>
        <a href="order-now" class="btn btn-success text-uppercase">Order Now</a><br>
    </div>
</div>

@endsection