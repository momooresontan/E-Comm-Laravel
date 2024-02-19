@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="show-img" src="{{ $product->gallery }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/"><i class="bi bi-arrow-left"></i>Go Back</a>
            </div>
        </div>
    </div>
@endsection
