@extends('adminlte::page')

@section('title', 'Manage Product Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Create New Product</h1>
@stop

@section('content')
    {{-- Minimal --}}
  <form style="margin-left: 100px; margin-right:100px; margin-top:50px" method="POST" action="create-product">
    @csrf
    <div class="form-group row">
      <label for="inputName" class="col-sm-3 col-form-label">Product Name</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputSlug" class="col-sm-3 col-form-label">Slug</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="name" name="slug" placeholder="Slug">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
      <div class="col-sm-7">
        <input type="number" min="1" class="form-control" id="inputPrice" name="price" placeholder="Price">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputCost" class="col-sm-3 col-form-label">Cost</label>
      <div class="col-sm-7">
        <input type="number" min="1" class="form-control" id="inputCost" name="cost" placeholder="Cost">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputQuantity" class="col-sm-3 col-form-label">Quantity</label>
      <div class="col-sm-7">
        <input type="number" min="1" class="form-control" id="inputQuantity" name="quantity" placeholder="Quantity">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputDetail" class="col-sm-3 col-form-label">Description</label>
      <div class="col-sm-7">
      <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Detail"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Category</label>
      <select class="form-select" id="category-select" name="category" required>
        <option value="">Select Category</option>
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group row">
      <div class="col-sm-3">
      </div>
        <div class="col-sm-4">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop