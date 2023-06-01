@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Section</h1>
    <div class="text-center">
        <a type="button" class="btn btn-warning my-3 border-0 text-white" href="{{route('admin.products.create')}}">AGGIUNGI</a>
    </div>
    @if (Session::has('message'))
    <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{Session('message')}}</strong>
    </div>    
    @endif

    <div class="table-responsive">
        <table class="table table-primary align-middle">
            <thead class="text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">TITOLO</th>
                    <th scope="col">IMMAGINE</th>
                    <th class="description-size" scope="col">DESCRIZIONE</th>
                    <th scope="col">PREZZO</th>
                    <th scope="col">DISPONIBILITÀ</th>
                    <th scope="col">AZIONI</th>
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
                    <td class="text-uppercase text-center" scope="row">{{$product->availability ? 'disponibili': 'non disponibili'}}</td>
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
                                        <h5 class="modal-title" id="modalTitle-{{$product->id}}">ELIMINA <SPAN class="text-uppercase">{{$product->title}}</SPAN></h5>
                                        <img class="shadow my-2" width="100" src="{{$product->img}}" alt="">
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare questo prodotto? L'azione sarà irreversibile.
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center gap-2">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ANNULLA</button>
                                        <form action="{{route('admin.products.destroy', $product->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">CONFERMA</button>
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