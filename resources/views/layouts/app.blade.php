<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet'
          type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- RS slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/rs-plugin/css/settings.css') }}" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- color css -->
    <link class="color-scheme-color" type="text/css" rel="stylesheet" media="all" href="{{ asset('css/theme/color-01.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body class="home-1">

@section('header')
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Add your site or application content here -->

<!-- header-top-area start -->
<!-- barra nera -->
<div class="header-top-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-4">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="top-menu">
                    @if (Route::has('login'))
                        @auth
                            <ul>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="{{ url('cart') }}">Shopping cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        @else
                            <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-top-area end -->
<!-- fine barra nera -->

<div class="">
    <header>
        <!-- header-bottom-area start -->
        <!--riga barra di ricerca-->
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <!--logo-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <a href="{{ url('index') }}"><span>e</span> Online Shop</a>
                        </div>
                    </div>
                    <!--fine logo-->
                    <!-- barra di ricerca-->
                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-6 hidden-xs">
                        <div class="header-search">
                            <select>
                                <option value="0">All Categories</option>
                                <option value="1">Women's Clothing &amp; Accessories</option>
                                <option value="2">Men's Clothing &amp; Accessories</option>
                                <option value="0">Phones &amp; Telecommunications</option>
                                <option value="0">Computer &amp; Office</option>
                                <option value="0">Consumer Electronics</option>
                                <option value="0">Jewelry &amp; Accessories</option>
                                <option value="0">Home &amp; Garden</option>
                                <option value="0">Luggage &amp; Bags</option>
                                <option value="0">Shoes</option>
                                <option value="0">Mother &amp; Kids</option>
                                <option value="0">Sports &amp; Entertainment</option>
                                <option value="0">Health &amp; Beauty</option>
                                <option value="0">Watches</option>
                                <option value="0">Toys &amp; Hobbies</option>
                                <option value="0">Weddings &amp; Events</option>
                                <option value="0">Novelty &amp; Special Use</option>
                                <option value="0">Automobiles &amp; Motorcycles</option>
                                <option value="0">Lights &amp; Lighting</option>
                                <option value="0">Furniture</option>
                                <option value="0">Industry &amp; Business</option>
                                <option value="0">Electronic Components &amp; Supplies</option>
                                <option value="0">Office &amp; School Supplies</option>
                                <option value="0">Electrical Equipment &amp; Supplies</option>
                                <option value="0">Gifts &amp; Crafts</option>
                                <option value="0">Home Improvement</option>
                                <option value="0">Food</option>
                                <option value="0">Travel and Coupons</option>
                                <option value="0">Security &amp; Protection</option>
                                <option value="0">In All Categories</option>
                            </select>
                            <input type="text" placeholder="search product..." />
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- fine barra di ricerca -->
                    @if (Route::has('login'))
                        @auth
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 float-right account-wrap">
                                <!-- Header shopping cart -->
                                <div class="my-account-holder float-right"><a href="{{ url('cart') }}">
                                        <div class="total-cart my-account-title" data-toggle="my-cart">
                                            <div class="user-icon float-left">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                            <div class="float-left cart-link">
                                                <a href="#">2 Item(s)</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Header shopping cart -->
                                <div class="my-account-holder float-right"><a href="wishlist.html">
                                        <div class="my-account-title">
                                            <div class="user-icon float-left">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @else

                        @endauth
                    @endif
                </div>
            </div>
        </div>
        <!-- header-bottom-area end -->
        <!-- fine barra di ricerca -->

        <!-- main-menu-area start -->
        <div class="main-menu-area hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('index') }}">home</a>
                                        <!--<ul>
                                            <li><a href="index.html">Homepage Version 1</a></li>
                                            <li><a href="index-2.html">Homepage Version 2</a></li>
                                            <li><a href="index-3.html">Homepage Version 3</a></li>
                                        </ul>-->
                                    </li>

                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product.html">product-page</a></li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="single-blog.html">single-blog</a></li>
                                            <li><a href="single-blog-video.html">single-blog-video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Clothing</a>
                                        <div class="mega-menu">
												<span>
													<a class="mega-title" href="#">WOMEN CLOTH </a>
													<a href="shop.html">casual shirt</a>
													<a href="shop.html">rikke t-shirt</a>
													<a href="shop.html">mia top </a>
													<a href="shop.html">muscle tee </a>
												</span>
                                            <span>
													<a class="mega-title" href="#">MEN CLOTH </a>
													<a href="shop.html">casual shirt</a>
													<a href="shop.html">rikke t-shirt</a>
													<a href="shop.html">mia top </a>
													<a href="shop.html">muscle tee </a>
												</span>
                                            <span>
													<a class="mega-title" href="#">WOMEN JEWELRY </a>
													<a href="shop.html">necklace </a>
													<a href="shop.html">chunky short striped </a>
													<a href="shop.html">samhar cuff</a>
													<a href="shop.html">nail set </a>
												</span>
                                            <span class="mega-menu-img">
													<a href="shop.html"><img src="img/5_hover_2.jpg" alt="" /></a>
												</span>
                                        </div>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="cart.html">shopping cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="login.html">login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-menu-area end -->
    </header>
</div>

@show

@yield('content')

@section('footer')
    <footer>
        <!-- footer-top-area start -->
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!-- footer-widget start -->
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <div class="footer-logo"><a href="#"><span>e</span> Online Shop</a></div>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. .</p>
                            <address class="box-address">
                                <span class="fa fa-home"></span>123 Pall Mall, London England<br>
                                <span class="fa fa-phone"></span> <b class="color-dark">+12345 67890 </b><br>
                                <span class="fa fa-envelope"></span> <a class="color" href="mailto:admin@yourdomain.com">admin@yourdomain.com</a>
                            </address>
                        </div>
                    </div>
                    <!-- footer-widget end -->
                    <!-- footer-widget start -->
                    <div class="col-lg-3 col-md-3 hidden-sm">
                        <div class="footer-widget">
                            <h3>Information</h3>
                            <ul class="footer-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Site Map</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer-widget end -->
                    <!-- footer-widget start -->
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <h3>Our services</h3>
                            <ul class="footer-menu">
                                <li><a href="#">Shipping & Returns</a></li>
                                <li><a href="#">Secure Shopping</a></li>
                                <li><a href="#">International Shipping</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer-widget end -->
                    <!-- footer-widget start -->
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <h3>NEWSLETTER SIGNUP</h3>
                            <div class="subscribe-title">
                                <form action="#">
                                    <div class="subscribe-form">
                                        <input type="text" placeholder="Your Email.........">
                                        <button>
                                            subscribe</button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget end -->
                </div>
            </div>
        </div>
        <!-- footer-top-area end -->
        <!-- footer-bottom-area start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="copyright">
                            <p>Copyright © <a href="#" target="_blank">Noiatri</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="payment-img">
                            <img src="{{ asset('img/payment.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom-area end -->
    </footer>
    <!-- footer end -->
    @show

@section('end')
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery-1.12.0.min.j') }}s"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- RS-Plugin JS -->
    <script type="text/javascript" src="{{ asset('lib/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('lib/rs-plugin/rs.home.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Cookie js -->
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
@show
</body>
</html>
