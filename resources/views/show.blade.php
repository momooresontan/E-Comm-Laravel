@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="show-img" src="{{ $product->gallery }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/"><i class="bi bi-arrow-left"></i>Go Back</a>
                <h2>{{ $product->name }}</h2>
                <h3>Price: {{ $product->price }}</h3>
                <h4>Details: {{ $product->description }}</h4>
                <h4>Category: {{ $product->category }}</h4>
                <br><br>
                <button class="btn btn-primary text-uppercase">Add to Cart</button>
                <button class="btn btn-success text-uppercase m-3">Buy Now</button>
                <br><br>
            </div>
        </div>
    </div>
@endsection
