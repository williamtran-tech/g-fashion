@extends('master_layout')
@section('top_banner')
<div class="row top_banner">
    <img src="https://images.unsplash.com/photo-1515555230216-82228b88ea98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTMwfHxuaWtlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" alt="">
</div>
@endsection

@section('landing_page')
@yield('top_banner')
<div class="row side_banner">
    <div class="left_banner col-4">
        <img src="https://images.unsplash.com/photo-1528311205469-a0f2917476d9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDV8fG5pa2V8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" alt="" href="/home">
    </div>
    <div class="right_banner col-8">
        <a href="/login"><img src="https://images.unsplash.com/photo-1600181516264-3ea807ff44b9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fG5pa2V8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" alt="" ></a>
    </div>
</div>
@endsection