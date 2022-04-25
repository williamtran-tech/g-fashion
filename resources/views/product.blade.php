@extends('master_layout')
@section('filter')
<div class="carousel slide">
    <!-- The Slideshow -->
        <div class="img">
        </div>
        <div class="row">
            <div class="col-4">
                <div class="input-group rounded m-5">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                      <i class="fas fa-search"></i>
                    </span>
                  </div>
            </div>
            <div class="col-8  ">
                <div class=" m-5 d-flex justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <h1>hello</h1>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
@section('each_product')
<div class='container-fluid'>
    <div class="card mx-auto col-md-3 col-10 mt-5"> <img class='mx-auto img-thumbnail' src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg" width="auto" height="auto" />
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h5 class="card-title font-weight-bold" id="name">Nike</h5>
                <p class="card-text" id="price">$299</p> 
                <a href="/product01" class="btn details px-auto" >view details</a><br />
                <a href="#" class="btn cart px-auto" onclick="add_to_cart(this.id)" id="1">ADD TO CART</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('all_product')
 @yield('filter')
 <div class="row">
     <div class="col-3">
        @yield('each_product')
     </div>
     <div class="col-3">
        @yield('each_product')
     </div>

     <div class="col-3">
        @yield('each_product')
     </div>

     <div class="col-3">
        @yield('each_product')
     </div>

     <div class="col-3">
        @yield('each_product')
     </div>

     <div class="col-3">
        @yield('each_product')
     </div>

     <div class="col-3">
        @yield('each_product')
     </div>

     

 </div>
@endsection