@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Products</h1>
    <div class="row row-cols-3 g-3">
        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-header text-center">
                <h3 class="text-uppercase">{{$product->title}}</h3>
            </div>
            <div class="card-body text-center">                    
                    <img class="card-img-top w-75 my-3" src="{{$product->img}}" alt="">
                    <p>{{$product->description}}</p>
                </div>
                <div class="card footer text-center fw-bold">
                <p>{{$product->availability ? 'DISPONIBILI' : 'NON DISPONIBILI'}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection