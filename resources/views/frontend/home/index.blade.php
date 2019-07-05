<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon Icon Css -->
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/image/favicon-32x32.png') }}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">	
<!-- Font Css -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="{{ asset('frontend/css/ionicons.min.css') }}" type="text/css" rel="stylesheet">
<!-- Owl Css -->
<link href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" type="text/css" rel="stylesheet">
<!-- Magnific Popup Css -->
<link href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css" rel="stylesheet">
<!-- Bootstrap Css --> 
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
<!-- Price Filter Css --> 
<link href="{{ asset('frontend/css/jquery-ui.css') }}" type="text/css" rel="stylesheet">
<!-- Select2 Css --> 
<link href="{{ asset('frontend/css/select2.min.css') }}" type="text/css" rel="stylesheet">
<!-- main css --> 
<link href="{{ asset('frontend/css/style.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('frontend/css/responsive.css') }}" type="text/css" rel="stylesheet">
<title>ATZ Shop - Online Shopping Store HTML Template</title>
</head>
<body>
<!-- Start Header Section -->
@include('frontend.home.header')
<!-- End Header Section -->

<!-- Start Slider Section -->
@include('frontend.home.slide')
<!-- End Slider Section -->

<!-- Start Offer Banner Section -->
@include('frontend.home.offer-banner')
<!-- End Offer Banner  Section -->



<!-- Start Banner Section -->
@include('frontend.home.banner')
<!-- End Banner Section -->

@yield('content')

<!-- Start Footer Section -->
@include('frontend.home.footer')
<!-- End Footer Section -->

<!-- Home Popup Section -->
<div class="modal fade bd-example-modal-lg main-popup" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="newsletter-pop-up d-flex">
                    <div class="popup-img">
                    	<img src="{{ asset('frontend/image/1_popup-img.jpg') }}" alt="popup-img">
                    </div>
                    <div class="popup-form text-center">
                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ion-close-round"></i></span>
                        </button>
                    	<div class="popup-logo">
                        	<img src="{{ asset('frontend/image/logo.png') }}" alt="logo">
                        </div>
                        <div class="popup-text">
                        	<p>Join us Now</p>
                            <h6>And get hot news about the theme</h6>
                        </div>
                    	<form class="subscribe-popup-form" method="post" action="#">
                            <input name="email" required type="email" placeholder="Enter Your Email">
                            <button class="btn btn-primary" title="Subscribe" type="submit">Subscribe</button>
                        </form>
                        <div class="form-check">
                            <label>Don't show this popup again!
                                <input class="defult-check" type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>
<!-- End Screen Load Popup Section -->

<!-- Start Quickview Popup Section -->
<div id="test-popup3" class="white-popup quickview-popup mfp-hide">
    <button type="button" class="mfp-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="ion-close-round"></i></span>
    </button>
    <div class="row">
        <div class="col-md-5">
             <div class="product-image">
                <img id="product_img" src='{{ asset('frontend/image/placeholder_10.jpg') }}' data-zoom-image="{{ asset('frontend/image/placeholder_10.jpg') }}"/>
             </div>
             <div id="pr_item_gallery" class="product_gallery_item owl-thumbs-slider owl-carousel owl-theme">
                <div class="item">
                    <a href="#" class="active" data-image="{{ asset('frontend/image/placeholder_10.jpg') }}" data-zoom-image="{{ asset('image/placeholder_10.jpg') }}">
                        <img src="{{ asset('frontend/image/placeholder_9.jpg') }}" />
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-image="{{ asset('frontend/image/placeholder_10.jpg') }}" data-zoom-image="{{ asset('frontend/image/placeholder_10.jpg') }}">
                        <img src="{{ asset('frontend/image/placeholder_9.jpg') }}" />
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="quickview-product-detail">
                <h2 class="box-title">Ornare sed consequat</h2>
                <h3 class="box-price"><del>$ 95.00</del>$ 81.00</h3>
                <p class="box-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <p class="stock">Availability: <span>In Stock</span></p>
                <div class="quantity-box">
                    <p>Quantity:</p>
                    <div class="input-group">
                    	<input type="button" value="-" class="minus">
                        <input class="quantity-number qty" type="text" value="1" min="1" max="10">
                        <input type="button" value="+" class="plus">
                    </div>
                    <div class="quickview-cart-btn">
                        <a href="#" class="btn btn-primary"><img src="{{ asset('frontend/image/cart-icon-1.png') }}" alt="cart-icon-1"> Add To Cart</a>
                    </div>
                </div>
                <div class="box-social-like d-sm-flex justify-content-between">
                    <ul class="hover-icon box-like">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                    </ul>
                    <ul class="hover-icon box-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Quickview Popup Section -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Jquery js -->
<script src="{{ asset('frontend/js/jquery.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/jscript"></script>
<!-- Magnific Popup js -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}" type="text/jscript"></script>
<!-- Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ"  type="text/javascript"></script>
<!-- Owl js -->
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}" type="text/jscript"></script>
<!-- Counter js -->
<script src="{{ asset('frontend/js/jquery.countup.js') }}" type="text/jscript"></script>
<script src="{{ asset('frontend/js/waypoint.js') }}" type="text/jscript"></script>
<!-- Select2 js -->
<script src="{{ asset('frontend/js/select2.min.js') }}" type="text/jscript"></script>
<!-- Price Slider js -->
<script src="{{ asset('frontend/js/jquery-price-slider.js') }}" type="text/jscript"></script>
<script src='{{ asset('frontend/js/jquery.elevatezoom.js') }}'></script>
<!-- Custom css -->
<script src="{{ asset('frontend/js/custom.js') }}" type="text/jscript"></script> 
</body>
</html>	