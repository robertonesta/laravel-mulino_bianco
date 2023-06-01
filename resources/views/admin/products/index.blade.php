@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Section</h1>
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
        <table class="table table-primary align-middle">
            <thead class="text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th class="description-size" scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td scope="row">{{$product->id}}</td>
                    <td scope="row" class="text-uppercase">{{$product->title}}</td>
                    <td scope="row">
                        <img width="100" src="{{$product->img}}" alt="{{$product->title}}">
                    </td>
                    <td scope="row">{{$product->description}}</td>
                    <td scope="row">€{{$product->price}}</td>
                    <td class="text-uppercase text-center" scope="row">{{$product->availability ? 'in stock': 'out of stock'}}</td>
                    <td scope="row">
                        <a class="btn btn-primary" type="button" href="{{route('admin.products.show', $product->id)}}"><i class="fa-solid fa-magnifying-glass fa-fw"></i></a>
                        <a class="btn btn-secondary" type="button" href="{{route('admin.products.edit', $product->id)}}"><i class="fa-solid fa-pencil fa-fw"></i></a>
                        <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$product->id}}">
                            <i class="fas fa-trash fa-sm fa-fw"></i> 
                        </a>
                        
                        <div class="modal fade" id="modal-{{$product->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$product->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex flex-column">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                        <h5 class="modal-title" id="modalTitle-{{$product->id}}">Delete {{$product->title}}</h5>
                                        <img width="100" src="{{$product->thumb}}" alt="">
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want delete this element? This is a no-return action.
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center gap-2">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('admin.products.destroy', $product->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection