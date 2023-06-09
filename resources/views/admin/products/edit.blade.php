@extends('layouts.app')
@section('content')
<div class="container">
  <h1>EDIT</h1>
    @include('partials.validation_errors')
    <form class="bg-white card p-4" action="{{route('admin.products.update', $product->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="title" class="form-label fw-bold">TITOLO</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="change Title" value="{{old('title', $product->title)}}" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="img" class="form-label fw-bold">IMMAGINE</label>
          <input type="text" name="img" id="img" class="form-control" placeholder="change image path" value="{{old('img', $product->img)}}" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="hoverImg" class="form-label fw-bold">IMMAGINE 2</label>
          <input type="text" name="hoverImg" id="hoverImg" class="form-control" placeholder="change image 2 path" value="{{old('hoverImg', $product->hoverImg)}}" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label fw-bold">DESCRIZIONE</label>
          <textarea name="description" id="description" class="w-100 form-control" rows="5"  placeholder="change description">{{old('description', $product->description)}}</textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label fw-bold">PREZZO</label>
          <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{old('price', $product->price)}}" placeholder="change price" aria-describedby="helpId">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="1" id="availability" value="{{$product->availability}}" name="availability" checked>
          <label class="form-check-label fw-bold" for="availability">
            DISPONIBILITÀ
          </label>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <button type="reset" class="btn btn-secondary">AZZERA</button>
            <button type="submit" class="btn btn-success">CONFERMA</button>
        </div>
    </form>
</div>
@endsection