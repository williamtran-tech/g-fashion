@extends('layouts.master_layout')
@extends('layouts.product_detail_layout')
@section('product_detail')
<div class="container ">
    <div class="card_detail ">
        <div class="container-fliud ">
            <div class="wrapper row">
                <div class="col-2 ">
                    <ul class="nav-tab">
                        <li><a data-target="#pic-2" data-toggle="tab"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></a></li>
                        <li><a data-target="#pic-3" data-toggle="tab"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></a></li>
                        <li><a data-target="#pic-4" data-toggle="tab"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></a></li>
                    </ul>
                </div>
                <div class="preview-pic col-4 tab-content">
                    <div class="tab-pane active" id="pic-1"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                    <div class="tab-pane" id="pic-2"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                    <div class="tab-pane" id="pic-3"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                    <div class="tab-pane" id="pic-4"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                    <div class="tab-pane" id="pic-5"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
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
                        <p>This is a shoe</p>
                    </div>
                    <div>
                        <h5 class="colors p-2 border-bottom">
                            Category: 
                            <a href="/">{{$product->category->name}}</a>
                        </h5>
                    </div>
                    <div>
                        <h5 class="price border-bottom p-2 ">Price: <span id="price">{{$product->price}} $</span></h5>
                    </div>
                    <div class="action p-2 border-bottom">
                        <button class="add-to-cart btn btn-default" type="button">add to cart</button>
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