@extends('master_layout')
@section('login')
<div class="login_form d-flex justify-content-center">
    <form class="mx-1 mx-md-4 col-4">
      @csrf
        <div class="d-flex flex-row justify-content-center mb-4">
            <h1>Sign in</h1>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-envelope fa-lg me-3 fa-fw mb-4"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="email" id="form3Example3c" class="form-control email" />
            <label class="form-label" for="form3Example3c">Your Email</label>
          </div>
        </div>
    
        <div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-lock fa-lg me-3 fa-fw mb-4"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="password" id="form3Example4c" class="form-control password" />
            <label class="form-label" for="form3Example4c">Password</label>
          </div>
        </div>
    
        {{-- <div class="row align-items-center mb-4 ">
          <button type="button" class="btn btn-primary btn-lg login_button">Login</button>
        </div> --}}
        <div class=" d-flex justify-content-center mb-4">
            <a href="">Forgot password?</a>
        </div>
        <div class="row justify-content-center mb-0">
            <button type="button" class="btn btn-primary btn-lg login_button col-6">Login</button>
        </div>
          
      </form>
</div>
@endsection
@section('menu_js_2')
<script src="js/navbar2.js"></script>
@endsection