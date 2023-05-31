@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('admin.products.update', $product->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="change Title" value="{{$product->title}}" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="img" class="form-label">Image</label>
          <input type="text" name="img" id="img" class="form-control" placeholder="change image path" value="{{$product->img}}" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" class="w-100 form-control" rows="1"  placeholder="change description">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{$product->price}}" placeholder="change price" aria-describedby="helpId">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="1" id="availability" value="{{$product->availability}}" name="availability" checked>
          <label class="form-check-label" for="availability">
            In stock
          </label>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-success">Confirm</button>
        </div>
    </form>
</div>
@endsection