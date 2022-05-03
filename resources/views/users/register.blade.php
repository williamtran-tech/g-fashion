@extends('layouts.master_layout')
@extends('layouts.sign_up_layout')
@section('register')

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="POST" action="/register">
                  @csrf
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputName" placeholder="Your Name" name="name" required value="{{old('name')}}">
                    <label for="name">Your Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required value="{{old('email')}}">
                    <label for="email">Email</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
                    <label for="password">Password</label>
                  </div>
                  {{-- <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="inputRePassword" placeholder="RePassword" name="re-password" required>
                    <label for="re-password">Confirm Password</label>
                  </div> --}}

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required/>
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; background-color:rgb(129, 7, 5); color: white; border:none;">Register</button>
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
                <img src="https://images.unsplash.com/photo-1597045566677-8cf032ed6634?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" class="img-fluid img_register" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
@section('menu_js_2')
<script src="js/navbar2.js"></script>
@endsection