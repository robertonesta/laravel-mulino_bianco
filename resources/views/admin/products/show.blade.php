@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">{{$product->title}}</h3>
        </div>
        <div class="card-body text-center">
            <img width="400" src="{{$product->img}}" alt="">
        </div>
        <div class="card-footer">
            <p><strong>Description:</strong> {{$product->description}}</p>
            <p><strong>Sell price:</strong>€{{$product->price}}</p>
            <div class="text-center">
                <a type="button" class="btn btn-secondary" href="{{route('admin.products.index')}}">Go back</a>
            </div>
        </div>
    </div>
</div>
@endsection