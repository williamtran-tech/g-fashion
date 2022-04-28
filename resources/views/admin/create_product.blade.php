@extends('layouts.master_layout')

@section('create_product')
<div class="container mt-3">
    <form id="create-product-frm" method="POST" action="create_product">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Product Name" name="name" required>
            <label for="name">Product Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="slug" placeholder="Product Name" name="slug" required>
            <label for="name">Product Slug</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="price" name="price" placeholder="Product Price" required>
            <label for="price">Product Price</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="category-select" name="category" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <label for="category-select">Category</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="img-src" name="img_path" placeholder="Image Link" required>
            <label for="img-src">Image (URL)</label>
        </div>
        <button type="submit" class="btn btn-success btn-lg">Create</button>
    </form>
    {{-- Message create product fail --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!--Message Create product successful-->
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
</div>
@endsection

