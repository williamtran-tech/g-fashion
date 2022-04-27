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
    <tr>
      <th scope="row">1</th>  
      <td style="text-align:center;">Áo Chery</td>
      <td style="text-align:center;">200,000₫</td>
      <td>- Áo Chery thời trang thiết kế trẻ trung, hiện đại mang đến cho bạn gái phong cách năng động nhưng không kém phần nữ tính.</td>
      <td style="text-align:center;">Chery</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateProduct')}}">Update</a>
        <br><br>
        <a type="button" class="btn btn-danger" href="#">Delete</a>
      </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="text-align:center;">Áo khoác kaki hai lớp mangto</td>
      <td style="text-align:center;">425,000₫</td>  
      <td>Chất liệu thun cotton mềm mại, co giãn, thấm hút tốt.
       Cho phái mạnh thêm thời trang phong cách cá tính và sành điệu.</td>
      <td style="text-align:center;">Mangto</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateProduct')}}">Update</a>
        <br><br>
        <a type="button" class="btn btn-danger" href="#">Delete</a>
    </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td style="text-align:center;">Áo thun dài tay Vendo</td>
      <td style="text-align:center;">225,000₫</td>
      <td>Galaxy A12 (6GB/128GB) 2021, một phiên bản smartphone giá rẻ với thiết kế đẹp, cấu hình tốt.</td>
      <td style="text-align:center;">Vendo</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateProduct ')}}">Update</a>
        <br><br>
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