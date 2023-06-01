@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-uppercase">{{$product->title}}</h3>
        </div>
        <div class="card-body text-center">
            <div id="image_switch" class="d-flex justify-content-center">
                <img class="image w-50 card-img-top my-3 d-block" src="{{$product->img}}" alt="">
                <img class="hoverImg w-50 card-img-top my-3 d-none" src="{{$product->hoverImg}}" alt="">
            </div>
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