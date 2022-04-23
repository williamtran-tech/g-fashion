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
</head>
<body>
    <div class="injoy_megamenu">

		<div class="navbar navbar-expand-xl shadow-sm injoy_header">
			
			<div class="container-fluid p-0 m-0">

				<div class="navbar-collapse collapse p-0 m-0 row">

					<!-- START: Menu Text Links -->
					
					<ul class="nav navbar-nav side_pane col">

						<li class="nav-item">
							<a href="about01.html" class="menu_text add_margin">HOME</a>
						</li>

						<li class="nav-item">
							<a href="Ideas.html" class="menu_text add_margin">CONTACT</a>
						</li>

						<!-- DROPDOWN: Shop Products-->
						<li class="dropdown menu-large nav-item">
							
							<a href="#" class="menu_text" data-toggle="dropdown" id="dropdownShop">PRODUCT</a>
							
							<div class="dropdown-menu megamenu p-0 m-0" aria-labelledby="dropdownShop">
						
									<div class="row mx-auto menu_wrapper">
										<div class="col-xl-1"></div>
										<div class="col-xl-10 pl-5 ml-4">
											<div class="float-left shop_menu_col">
											<ul class="list-unstyled text-center">
												<li class="menucat_text mb-3">Living</li>
												<li class="menu_link"><a href="Products_Sofa.html">Sofas</li>
												<li class="menu_link">Rugs</li>
												<li class="menu_link">Lamps</li>
											</ul>
											</div>
									
									
											<div class="float-left shop_menu_col">
											<ul class="list-unstyled text-center">
												<li class="menucat_text mb-3">Dining</li>
												<li class="menu_link"><a href="product_tables.html">Tables</a></li>
												<li class="menu_link">Lights</li>
												<li class="menu_link">Wares</li>
											</ul>
											</div>
									
										<div class="float-left shop_menu_col">
											<ul class="list-unstyled text-center">
												<li class="menucat_text mb-3">Bedding</li>
												<li class="menu_link"><a href="product_beds.html">Beds</a></li>
												<li class="menu_link">Storage</li>
												<li class="menu_link">Textiles</li>
											</ul>
										</div>
										<div class="float-left shop_menu_col">
											<ul class="list-unstyled text-center">
												<li class="menucat_text mb-3">Bathing</li>
												<li class="menu_link">Mirrors</li>
												<li class="menu_link">Baskets</li>
												<li class="menu_link">Accessories</li>
											</ul>
										</div>
										<div class="float-left shop_menu_col">
											<ul class="list-unstyled text-center">
												<li class="menucat_text mb-3">Working</li>
												<li class="menu_link">Desks</li>
												<li class="menu_link">Chairs</li>
												<li class="menu_link"><a href="product_shelves.html">Shelves</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
										<div class="col-xl-1"></div>
									</div>
							
								</div>

							</li>
						</ul>
					<!-- END: Menu Text Links -->


					<!-- Navbar brand -->
					<div class="nav navbar-nav col justify-content-center">
							<a class="navbar-brand" href="home.html"><h1>G_Fashion</h1></a>
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
{{-- @yield('login')  --}}
{{-- @yield('products') --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/navbar.js"></script>

</body>
</html>

