@extends('layouts.master_layout')
{{-- @extends('layouts.product_detail_layout') --}}

@section('title')
<title>Product Detail | {{$product->name}}</title>
@endsection

@section('product_detail')
<div class="container pt-5">
    <div class="card_detail ">
        <div class="container-fliud ">
            <div class="wrapper row">
                <div class="col-2 ">
                    <ul class="nav-tab">
                        @foreach ($images as $image)
                            <li style="list-style: none;"><a data-target="#pic-1" data-toggle="tab"><img src="/images/{{$image->image}}" width="110%"/></a></li>    
                        @endforeach
                    </ul>
                </div>
                <div class="preview-pic col-4 tab-content">
                    <div class="tab-pane active"><img src="/cover/{{$product->cover_img}}" width="100%"/></div>
                </div>
                <div class="product_details col-5 ">
                    
                    <div>
                        <h3 class="product-title p-2 border-bottom">{{$product->name}}</h3>
                    </div>
                    <div>
                        <h5 class="sizes p-2 border-bottom">
                            Size:   
                            <span class="size ml-3" data-toggle="tooltip" title="small">S</span>
                            <span class="size ml-3" data-toggle="tooltip" title="medium">M</span>
                            <span class="size ml-3" data-toggle="tooltip" title="large">L</span>
                        </h5>
                    </div>
                    <div class="p-2 border-bottom">
                        <h5 class="colors ">
                            Description:
                        </h5>
                        <p>{{$product->description}}</p>
                    </div>
                    <div>
                        <h5 class="colors p-2 border-bottom">
                            Category: 
                            <a href="/" style="text-decoration: none; color:black;">{{$product->category->name}}</a>
                        </h5>
                    </div>
                    <div>
                        <h5 class="price border-bottom p-2 ">Price: <span id="price">{{$product->price}} $</span></h5>
                    </div>
                    <div class="action p-2 border-bottom">
                        <button class="add-to-cart btn" type="button" style="background-color:rgb(129, 7, 5); color: white;">Add to Cart</button>
                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('menu_js_2')
<script src="js/navbar2.js"></script>
@endsection