@extends('adminlte::page')

@section('title', 'Manage Product Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Product</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"style="text-align:center;">Name</th>
      <th scope="col"style="text-align:center;">Price</th>
      <th scope="col"style="text-align:center;">Detail</th>
      <th scope="col"style="text-align:center;">Brand</th>
      <th scope="col"style="text-align:center;">Function</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($products as $product)
        <tr>
          <th scope="row">{{$product->id}}</th>  
          <td style="text-align:center;">{{$product->name}}</td>
          <td style="text-align:center;">{{$product->price}}</td>
          <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat natus omnis ea incidunt voluptas, quae suuga voluptates sapiente non dolore quam.</td>
          <td style="text-align:center;">{{$product->category->name}}</td>
          <td style="text-align:center;">
          <a type="button" class="btn btn-warning" href="">Update</a>
          <br><br>
          <a type="button" class="btn btn-danger" href="">Delete</a>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop