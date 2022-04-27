<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    {{-- <link rel="stylesheet" href="css/navbar.css"> --}}
    <link rel="stylesheet" type="text/css" href="css/cart_popup.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/commonStyle.css">	
    <link rel="stylesheet" type="text/css" href="css/menu_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    {{-- <link rel="stylesheet" type="text/css" href="css/flaticon.css"> --}}
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/menu_style_W.css">
	<link rel="stylesheet" type="text/css" href="css/all_products.css">
    <link rel="stylesheet" type="text/css" href="css/product_detail.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">

</head>
<body>
    <div class="injoy_megamenu" id="fullmenu">

		<div class="navbar navbar-expand-xl shadow-sm injoy_header">
			
			<div class="container-fluid p-0 m-0">

				<div class="navbar-collapse collapse p-0 m-0 row">

					<!-- START: Menu Text Links -->
					
					<ul class="nav navbar-nav side_pane col">

						<li class="nav-item">
							<a href="/" class="menu_text add_margin">HOME</a>
						</li>

						<li class="nav-item">
							<a href="Ideas.html" class="menu_text add_margin">CONTACT</a>
						</li>

						<!-- DROPDOWN: Shop Products-->
						<li class="dropdown menu-large nav-item">
							
							<a href="#" class="menu_text" data-toggle="dropdown" id="dropdownShop" data-bs-toggle="dropdown">PRODUCT</a>
							
							<div class="dropdown-menu megamenu p-0 m-0" aria-labelledby="dropdownShop">
						
									<div class="row mx-auto menu_wrapper justify-content-center">
                                            <div class="col-2 text-center">
                                                <a href="/product"> <h4>Adidas</h4></a>
                                            </div>
                                            <div class="col-2 text-center">
                                                <a href=""> <h4>Nike</h4></a>
                                            </div>
                                            <div class="col-2 text-center">
                                                <a href=""> <h4>Others</h4></a>
                                            </div>
									</div>
							
							</div>

						</li>
					</ul>
					<!-- END: Menu Text Links -->


					<!-- Navbar brand -->
					<div class="nav navbar-nav col justify-content-center">
							<a class="navbar-brand" href="/"><h1 class="brand_logo">G Fashion</h1></a>
					</div>

					<!-- START: Menu Icons Links -->
					<ul class="nav navbar-nav ml-5  col justify-content-end">
						<li class="ml-auto">
							<ul class="nav navbar-nav">
								<li class="nav-item">
									<a href="" class="nav-link m-2 menu_icon" style="cursor: pointer;"><i class="fa-solid fa-cart-shopping"></i></a>
								</li>
								<li class="dropdown menu-large nav-item">
                                    <a href="/register" class="nav-link m-2 menu_icon" style="cursor: pointer;"><i class="fa-solid fa-user"></i></a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- END: Menu Icons Links -->


				</div>

				</div>
		</div>
	</div>
    @yield('register') 
    @yield('login') 

    @yield('landing_page')
  
    @yield('all_product')
    @yield('product_detail')
   
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/cart.js"></script>
@yield('menu_js')
@yield('menu_js_2')
</body>
</html>

