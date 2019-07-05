<header>
	<div class="header-top">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                    <ul class="header_list text-md-left text-center">
                        <li><a href="tel:+ 00 123 456 789"><i class="fa fa-phone"></i>+ 00 123 456 789</a></li>
                        <li><a href="mailto:info@gmail.com"><i class="fa fa-envelope-o"></i>info@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="header_list text-md-right text-center">
                        <li><a href="#test-popup1" class="open-popup-link">Login</a>
                            <div id="test-popup1" class="white-popup lr-popup mfp-hide text-center">
                                <button type="button" class="mfp-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="ion-close-round"></i></span>
                                </button>
                                <h4>Login</h4>
                                <form class="subscribe-popup-form" method="post" action="#">
                                    <input name="email" required type="email" placeholder="Enter Your Email">
                                    <input name="password" required type="password" placeholder="Enter Your Password">
                                    <div class="form-check text-left">
                                        <label>Remember me
                                            <input class="defult-check" type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <a href="#" class="forgot-password float-right">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary" title="Login" type="button">Login</button>
                                </form>
                                <h6>Don't have an account?</h6>
                                <a href="#test-popup2" class="sign-up open-popup-link">Click here to Sign up</a>
                            </div>	
                            <div id="test-popup2" class="white-popup lr-popup mfp-hide">
                                <button type="button" class="mfp-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="ion-close-round"></i></span>
                                </button>
                                <h4>Registration</h4>
                                <form class="subscribe-popup-form" method="post" action="#">
                                    <input name="input" required type="input" placeholder="Enter Your name">
                                    <input name="email" required type="email" placeholder="Enter Your Email">
                                    <input name="password" required type="password" placeholder="Enter Your Password">
                                    <input name="password" required type="password" placeholder="Confirmation Password">
                                    <div class="form-check">
                                        <label>I accept the terms and conditions
                                            <input class="defult-check" type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button class="btn btn-primary" title="Subscribe" type="button">Register</button>
                                </form>
                            </div>
                        </li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mdl">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="hm-inner d-sm-flex align-items-center justify-content-between">
                    	<div class="header-logo">
                        	<a href="index.html"><img src="{{ asset('frontend/image/logo.png') }}" alt="logo"></a>
                        </div>
                        <form class="header-form">
                        <input class="search-box" placeholder="Search Product..."  required value="" type="search">
                        <button type="submit">Search</button>
                    </form>
                    	<div class="header-right">
                        	<div class="header-cart">
                            <a href="#">
                                <div class="cart-icon">
                                    <img src="{{ asset('frontend/image/cart-icon.png') }}" alt="cart-icon">
                                    <span>02</span>
                                </div>
                                $237.00<i class="fa fa-angle-down"></i>
                            </a>
                            <div class="cart-box">
                                <div class="cart-info">
                                <div class="cart-prodect d-flex">
                                    <div class="cart-img">
                                        <img src="{{ asset('frontend/image/placeholder_1.jpg') }}" alt="cart-img">
                                    </div>
                                    <div class="cart-product">
                                        <a href="#">Ornare sed consequat</a>
                                        <p>$ 81.00</p>
                                    </div>
                                    <a href="#" class="close-icon d-flex align-items-center"><i class="ion-close"></i></a>
                                </div>
                                <div class="cart-prodect d-flex">
                                    <div class="cart-img">
                                        <img src="{{ asset('frontend/image/placeholder_1.jpg') }}" alt="cart-img">
                                    </div>
                                    <div class="cart-product">
                                        <a href="#">Pellentesque posuere</a>
                                        <p>$ 80.00</p>
                                    </div>
                                    <a href="#" class="close-icon d-flex align-items-center"><i class="ion-close"></i></a>
                                </div>
                            </div>
                                <div class="price-prodect d-flex align-items-center justify-content-between">
                                <p class="total">total</p>
                                <p class="total-price">$ 161.00</p>
                            </div>
                                <div class="cart-btn">
                                <a href="#" class="btn btn-primary">View Cart</a>
                            </div>
                            </div>
                    	</div>
                        	<div class="d-lg-none mm_icon">
                                <div class="form-captions" id="search">
                                    <button type="submit" class="submit-btn-2"><i class="fa fa-search"></i></button>
                                </div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-btm">
   		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<nav class="navbar navbar-expand-lg navbar-light">
                    	<div class="header-logo">
                        	<a href="#"><img src="{{ asset('frontend/image/logo.png') }}" alt="logo"></a>
                        </div>
                      	<div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                @php
                                    $menu_level_1 = DB::table('categories')->where('parent_id',1)->get();
                                @endphp

                                <li class="nav-item active">
                                    <a class="nav-link" href="about-us.html">Home</a>
                                </li>
                                
                                <li class="nav-item dropdown">
                                	<a class="nav-link dropdown-toggler" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm<i class="fa fa-angle-down"></i><i class="fa fa-angle-right"></i></a>
                                    <div class="sub-menu dropdown-menu">
                                        @foreach($menu_level_1 as $level_1)
                                    	<ul class="all-menu">
                                            <li class=""><a href="{{ url('san-pham',[$level_1->slug]) }}">{{$level_1->title}}</a>
                                             
                                            </li>
                                            
                                            {{-- <li><a href="index-2.html">Home Page 2</a></li> --}}
                                            {{-- <li><a href="index-3.html">Home Page 3</a></li>
                                            <li><a href="index-4.html">Home Page 4</a></li>
                                            <li><a href="index-45.html">Home Page 5</a></li> --}}
                                        </ul>
                                         @endforeach
                                    </div>
                                </li>
                               
                                {{-- <li class="nav-item">
                                	<a class="nav-link" href="about-us.html">About us</a>
                                </li> --}}
                                {{-- <li>
                                	<a class="nav-link dropdown-toggler" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Featured<i class="fa fa-angle-down"></i><i class="fa fa-angle-right"></i></a>
                                    <div class="sub-menu mega-menu dropdown-menu">
                                    	<ul>
                                        	<li class="submenu-links nav-item dropdown">
                                            	<a href="#" class="menu-title dropdown-toggler" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dresses<i class="fa fa-angle-down"></i><i class="fa fa-angle-right"></i></a>
                                                <ul class="all-menu dropdown-menu">
                                                	<li><a href="#">Cocktail</a></li>
                                                    <li><a href="#">Day</a></li>
                                                    <li><a href="#">Evening</a></li>
                                                    <li><a href="#">Sundresses</a></li>
                                                    <li><a href="#">Sweater</a></li>
                                                    <li><a href="#">Belts</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu-links dropdown">
                                            	<a href="#" class="menu-title dropdown-toggler" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accessories<i class="fa fa-angle-down"></i><i class="fa fa-angle-right"></i></a>
                                                <ul class="all-menu dropdown-menu">
                                                	<li><a href="#">Evening</a></li>
                                                    <li><a href="#">Long Sleeved</a></li>
                                                    <li><a href="#">Sort Sleeved</a></li>
                                                    <li><a href="#">Sleeveless</a></li>
                                                    <li><a href="#">Tanks  and Camis</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu-links dropdown">
                                            	<a href="#" class="menu-title dropdown-toggler" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tops<i class="fa fa-angle-down"></i><i class="fa fa-angle-right"></i></a>
                                                <ul class="all-menu dropdown-menu">
                                                	<li><a href="#">Cocktail</a></li>
                                                    <li><a href="#">Day</a></li>
                                                    <li><a href="#">Evening</a></li>
                                                    <li><a href="#">Sundresses</a></li>
                                                    <li><a href="#">Sweater</a></li>
                                                    <li><a href="#">Belts</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu-img"><A href="#"><img src="{{ asset('frontend/image/placeholder_2.jpg') }}" alt="banner"></a></li>
                                        </ul>
                                    </div>
                                </li> --}}
                                {{-- <li class="dropdown">
                                	<a class="nav-link dropdown-toggler" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop<i class="fa fa-angle-down"></i><i class="fa fa-angle-right"></i></a>
                                    <div class="sub-menu dropdown-menu">
                                    	<ul class="all-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-detail.html">Product Detail</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown">
                                	<a class="nav-link dropdown-toggler" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog<i class="fa fa-angle-down"></i><i class="fa fa-angle-right"></i></a>
                                    <div class="sub-menu dropdown-menu">
                                    	<ul class="all-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                            <li><a href="blog-with-sidebar-1.html">Blog with Sidebar</a></li>
                                            <li><a href="blog-with-sidebar-2.html">Blog List with Sidebar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                	<a class="nav-link" href="contact.html">Contact</a>
                                </li> --}}
                            </ul>
                      	</div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>