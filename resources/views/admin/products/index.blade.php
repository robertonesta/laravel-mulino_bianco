@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <a type="button" class="btn btn-warning my-3" href="{{route('admin.products.create')}}">Add a New Product</a>
    </div>
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{Session('message')}}</strong>
    </div>    
    @endif

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td scope="row">{{$product->id}}</td>
                    <td scope="row">{{$product->title}}</td>
                    <td scope="row">
                        <img width="100" src="{{$product->img}}" alt="{{$product->title}}">
                    </td>
                    <td scope="row">{{$product->description}}</td>
                    <td scope="row">€{{$product->price}}</td>
                    <td scope="row">{{$product->availability ? 'in stock': 'out of stock'}}</td>
                    <td scope="row">
                        <a class="btn btn-primary" type="button" href="{{route('admin.products.show', $product->id)}}">view</a>
                        <a class="btn btn-secondary" type="button" href="{{route('admin.products.edit', $product->id)}}">edit</a>
                        <form action="{{route('admin.products.destroy', $product->id)}}" method="post">
                            @csrf 
                            @method('delete')
                        <button class="btn btn-danger" type="submit">delete</button></form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection