@extends('adminlte::page')

@section('title', 'Manage Customer ManagementPage')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Customer</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"style="text-align:center;">Name</th>
      <th scope="col"style="text-align:center;">Date</th>
      <th scope="col"style="text-align:center;">Detail</th>
      <th scope="col"style="text-align:center;">Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td style="text-align:center;">Vo Bi</td>
      <td style="text-align:center;">23/04/2022</td>
      <td>
        OD122
      </td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-danger" href="#">Delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="text-align:center;">Thanh Phuoc</td>
      <td style="text-align:center;">23/05/2022</td>
      <td>
        OD123
      </td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-danger" href="#">Delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td style="text-align:center;">Vo Bi Thanh Phuoc</td>
      <td style="text-align:center;">23/06/2022</td>
      <td>
        OD125
      </td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-danger" href="#">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop