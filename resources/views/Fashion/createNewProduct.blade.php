@extends('adminlte::page')

@section('title', 'Manage Product Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Create New Product</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <form style="margin-left: 100px; margin-right:100px; margin-top:50px">
  <div class="form-group row">
    <label for="inputName" class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
    <div class="col-sm-7">
      <input type="numeric" class="form-control" id="inputPrice" placeholder="Price">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDetail" class="col-sm-3 col-form-label">Detail</label>
    <div class="col-sm-7">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Detail"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Brand</label>
    <select class="form-control col-sm-7" id="exampleFormControlSelect1">
      <option>Louis Vuitton</option>
      <option>Dior</option>
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