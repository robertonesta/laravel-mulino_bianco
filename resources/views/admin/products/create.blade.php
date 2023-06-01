@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.validation_errors')
    <form action="{{route('admin.products.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" value="{{old('title')}}" name="title" id="title" class="form-control" placeholder="Add a new Title" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="img" class="form-label">Image</label>
          <input type="text" value="{{old('img')}}" name="img" id="img" class="form-control" placeholder="Add a new image path" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" class="w-100 form-control" rows="5" placeholder="Add a new description"></textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" value="{{old('price')}}" step="0.01" name="price" id="price" class="form-control" placeholder="Add a new price" aria-describedby="helpId">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="1" id="availability" name="availability" checked>
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