@extends('layout')

@section('content')
    <div class="custom-product">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
          
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                @foreach ($products as $product)
                <div class="carousel-item {{ $product->id==6 ? 'active' : '' }}">
                    <a href="products/{{ $product->id }}">
                        <img class="slider-img" src="{{ $product->gallery }}">
                        <div class="carousel-caption slider-text rounded-4">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
          
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
          <div class="trending-wrapper">
            <h3>Trending Products</h3>
            @foreach($products as $product)
            <div class="trending-item">
                <a href="products/{{ $product->id }}">
                    <img class="trending-image" src="{{ $product->gallery }}">
                    <div class="">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                    </div>
                </a>
            </div>
            @endforeach
          </div>
        </div>
    </div>
@endsection
