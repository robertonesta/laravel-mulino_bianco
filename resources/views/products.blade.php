@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Products</h1>
    <div class="row row-cols-3 g-3">
        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-header text-center">
                    <h3 class="text-uppercase mb-0">{{$product->title}}</h3>
                </div>
                <div class="card-body text-center">
                    <div id="image_switch">
                        <img class="image card-img-top my-3 d-block" src="{{$product->img}}" alt="">
                        <img class="hoverImg card-img-top my-3 d-none" src="{{$product->hoverImg}}" alt="">
                    </div>
                    <p>{{$product->description}}</p>
                </div>
                <div class="card footer text-center fw-bold">
                    <p class="mt-3">{{$product->availability ? 'DISPONIBILI' : 'NON DISPONIBILI'}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection