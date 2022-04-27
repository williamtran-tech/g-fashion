@extends('layouts.master_layout')

@section('top_banner')
<div class="row top_banner">
    <img src="https://images.unsplash.com/photo-1515555230216-82228b88ea98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTMwfHxuaWtlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" alt="">
</div>
@endsection

@section('landing_page')
<div id="collections" class="carousel slide" data-ride="carousel" data-interval="false">

    <!-- The Slideshow -->

    <div class="carousel-inner">

        <div class="carousel-item active slide_img1">

            <div class="carousel-caption">
                <p class="sm_caption">Welcome to G Fashion</p>
                
                <p class="text-center"><a href="/products" class="btn_outline_w btn_xl">Explore more product here</a></p>

                <!-- for 320px -->
                <p class="text-center"><button class="btn_outline_w btn_sm"><a href="wfh_collection.html">Contact us</a></button></p>
            </div>
        </div>

        <div class="carousel-item slide_img2">
        </div>

    </div>
    <!-- Left & Right controls -->

    <a class="carousel-control-prev" href="#collections" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#collections" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
@endsection
@section('menu_js')
<script src="js/navbar.js"></script>
@endsection
