@extends('layouts.master_layout')
@extends('layouts.product_detail_layout')
@section('product_detail')
<div class="container ">
    <div class="card_detail ">
        <div class="container-fliud ">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                      <div class="tab-pane" id="pic-2"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                      <div class="tab-pane" id="pic-3"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                      <div class="tab-pane" id="pic-4"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                      <div class="tab-pane" id="pic-5"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></a></li>
                      <li><a data-target="#pic-2" data-toggle="tab"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></a></li>
                      <li><a data-target="#pic-3" data-toggle="tab"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></a></li>
                      <li><a data-target="#pic-4" data-toggle="tab"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></a></li>
                      <li><a data-target="#pic-5" data-toggle="tab"><img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" /></a></li>
                    </ul>
                    
                </div>
                <div class="product_details col-md-6">
                    <h3 class="product-title" id="name">Nike Jordan</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>
                    <p class="product-description"></p>
                    <h4 class="price">current price: <span id="price">$180</span></h4>
                   
                    <h5 class="sizes">sizes:
                        <span class="size" data-toggle="tooltip" title="small">s</span>
                        <span class="size" data-toggle="tooltip" title="medium">m</span>
                        <span class="size" data-toggle="tooltip" title="large">l</span>
                        <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                    </h5>
                    <h5 class="colors">colors:
                        <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                        <span class="color green"></span>
                        <span class="color blue"></span>
                    </h5>
                    <div class="action">
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