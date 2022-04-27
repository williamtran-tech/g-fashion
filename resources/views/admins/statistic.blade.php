@extends('adminlte::page')

@section('title', 'Manage statistic Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Statistic </h1>
@stop

@section('content')
    {{-- Minimal --}}
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"style="text-align:center;">Net revenue</th>
      <th scope="col"style="text-align:center;">Gross profit</th>
      <th scope="col"style="text-align:center;">Bestselling products</th>
      <th scope="col"style="text-align:center;">Month</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td style="text-align:center;">100.000.000₫</td>
      <td style="text-align:center;">9.490.000₫</td>
      <td style="text-align:center;">Shoes</td>
      <td style="text-align:center;">5/2021</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="text-align:center;">200.000.000₫</td>
      <td style="text-align:center;">5.990.000₫ </td>
      <td style="text-align:center;">Earings</td>     
      <td style="text-align:center;">6/2021</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td style="text-align:center;">300.000.000₫</td>
      <td style="text-align:center;">4.090.000₫</td>
      <td style="text-align:center;">Shirt</td> 
      <td style="text-align:center;">7/2021</td>
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