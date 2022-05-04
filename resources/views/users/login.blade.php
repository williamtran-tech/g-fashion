@extends('layouts.master_layout')

@section('title')
    <title>G Fashion | Login</title>
@endsection

@section('login')
    <div class="container" style="background-color: #eee;">
      <div class="ms-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-12 col-xl-11">
          <div class=" text-black ms-5" style="border-radius: 25px;">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">SIGN IN</p>

                  <form class="" method="POST" action="/login">
                    @csrf
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required value="{{old('email')}}">
                      <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
                      <label for="password">Password</label>
                    </div>
                    <div class="form-check d-flex justify-content-left mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c"/>
                      <label class="form-check-label" for="form2Example3">
                        Remember password
                      </label>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; background-color:rgb(129, 7, 5); color: white; border:none;">Sign In</button>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      Not have an account? <a href="/register" class="ms-2">Register here</a>
                    </div>

                    @if ($errors->any())
                      <ul>
                        @foreach ($errors->all() as $err)
                          <li style="color: red; font-size: 14px;">{{$err}}</li>
                        @endforeach
                      </ul> 
                    @endif
      
                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center ">
                  <img src="https://images.unsplash.com/photo-1618718315344-7cbffaa60b6b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" class="img-fluid img_register" height="100%" alt="Sample image">
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