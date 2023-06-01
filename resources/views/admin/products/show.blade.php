@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-uppercase">{{$product->title}}</h3>
        </div>
        <div class="card-body text-center">
            <img width="400" src="{{$product->img}}" alt="">
        </div>
        <div class="card-footer py-3 text-center">
            <p class="fs-5">{{$product->description}}</p>
            <p><strong>Prezzo di vendita: </strong>€{{$product->price}}</p>
            <div class="text-center">
                <a type="button" class="btn btn-secondary" href="{{route('admin.products.index')}}">TORNA INDIETRO</a>
            </div>
        </div>
    </div>
</div>
@endsection