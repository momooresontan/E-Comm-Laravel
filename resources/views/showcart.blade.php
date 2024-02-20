@extends('layout')

@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Cart</h4>
            @foreach($products as $product)
                <div class="searched-item">
                    <a href="products/{{ $product->id }}">
                        <img class="trending-image" src="{{ $product->gallery }}">
                        <div class="">
                            <h2>{{ $product->name }}</h2>
                            <h5>{{ $product->description }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach            
        </div>
    </div>
</div>

@endsection