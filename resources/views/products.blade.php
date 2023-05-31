@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-cols-3 g-3">
        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-header">
                <h5 class="text-center">{{$product->title}}</h5>
                <img class="card-img-top" src="{{$product->img}}" alt="">
                </div>
                <div class="card-body">                    
                    <p>{{$product->description}}</p>
                    <p >{{$product->availability ? 'in stock' : 'out of stock'}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection