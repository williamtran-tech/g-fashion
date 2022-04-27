@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<div id="datatable">
</div>
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Order</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"style="text-align:center;">Full name</th>
      <th scope="col"style="text-align:center;">Phone</th>
      <th scope="col" style="text-align:center;">Adress</th>
      <th scope="col" style="text-align:center;">Date</th>
      <th scope="col" style="text-align:center;">Status</th>
      <th scope="col" style="text-align:center;">Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td style="text-align:center;">Duc</td>
      <td style="text-align:center;">0896494632</td>
      <td style="text-align:center;">Trần Kế Xương</td>
      <td style="text-align:center;">23/03</td>
      <td style="text-align:center;"><p class="border border-dark">Created</p></td>
      <td style="text-align:center;">
        <button type="button" class="btn btn-danger">Delete</button>
    </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="text-align:center;">Phuoc</td>
      <td style="text-align:center;">0378649463</td>
      <td style="text-align:center;">Phan Đăng Lưu</td>
      <td style="text-align:center;">24/04</td>
      <td style="text-align:center; color: blue;"><p class="border border-primary">Paid</p></td>
      <td style="text-align:center;">
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td style="text-align:center;">Tam</td>
      <td style="text-align:center;">0344465673</td>
      <td style="text-align:center;">Phan Xích Long</td>
      <td style="text-align:center;">25/05</td>
      <td style="text-align:center; color: #FFC107;"><p class="border border-warning">Delivering</p></td>
      <td style="text-align:center;">
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td style="text-align:center;">Phuoc cute</td>
      <td style="text-align:center;">0344465456</td>
      <td style="text-align:center;">Thích Quảng Đức</td>
      <td style="text-align:center;">26/06</td>
      <td style="text-align:center; color: green;"><p class="border border-success">Done</p></td>
      <td style="text-align:center;">
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