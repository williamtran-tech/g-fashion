@extends('master_layout')

@section('admin_product')
<div class="content-wrapper ">
    <div class="content-header">
        <div class="container-fluid" style="margin-top:100px;">
            <h1 style="text-align:center;font-family:Roboto; font-size: 40px;">Product</h1>
        </div>
    </div>
    <form action="filter-by-category" method="POST">
        @csrf
        <div>
            <div class="form-floating mb-3">
                <select class="form-select" id="category-select" name="category" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            </div>
            
            <button type="submit" class="btn btn-info" href="">Apply</button>
        </div>
    </form>
    
    
    <div class="content">
        <div class="container-fluid">      
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col"style="text-align:center;">Name</th>
                        <th scope="col"style="text-align:center;">Price</th>
                        <th scope="col"style="text-align:center;">Detail</th>
                        <th scope="col"style="text-align:center;">Category</th>
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
        </div>
    </div>
</div>
@endsection