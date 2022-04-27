@extends('adminlte::page')

@section('title', 'Admin Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Create New Admin</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <form style="margin-left: 100px; margin-right:100px; margin-top:50px">
  <div class="form-group row">
    <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
    <div class="col-sm-7">
      <input type="email" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Role</label>
    <select class="form-control col-sm-7" id="exampleFormControlSelect1">
      <option>Admin</option>
      <option>Employee</option>
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