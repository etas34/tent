<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tent') }}</title>


    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">



    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('assets/css/bootstrap.custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('assets/css/home_1.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/css/listing.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/css/product_page.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/css/faq.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/css/about.css')}}" rel="stylesheet">



    @stack('styles')


</head>

<body>

<div id="page">

    <header class="version_1">
        <div class="layer"></div><!-- Mobile menu overlay mask -->
        <div class="main_header">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                        <div id="logo">
                            <a href="{{route('home')}}"><img src="{{ asset('assets/img/logo.svg') }}" alt="" width="100" height="35"></a>
                        </div>
                    </div>
                    <nav class="col-xl-6 col-lg-7">
                        <a class="open_close" href="javascript:void(0);">
                            <div class="hamburger hamburger--spin">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="main-menu">
                            <div id="header_menu">
                                <a href="{{route('home')}}"><img src="{{ asset('assets/img/logo_black.svg') }}" alt="" width="100" height="35"></a>
                                <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                            </div>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">Home</a>
                                    <ul>
                                        <li><a href="{{route('home')}}">Slider</a></li>
                                        <li><a href="index-2.html">Video Background</a></li>
                                        <li><a href="index-3.html">Vertical Slider</a></li>
                                        <li><a href="index-4.html">GDPR Cookie Bar</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu submenu">
                                    <a href="javascript:void(0);" class="show-submenu-mega">Pages</a>
                                    <div class="menu-wrapper">
                                        <div class="row small-gutters">
                                            <div class="col-lg-3">
                                                <h3>Listing grid</h3>
                                                <ul>
                                                    <li><a href="listing-grid-1-full.html">Grid Full Width</a></li>
                                                    <li><a href="listing-grid-2-full.html">Grid Full Width 2</a></li>
                                                    <li><a href="listing-grid-3.html">Grid Boxed</a></li>
                                                    <li><a href="listing-grid-4-sidebar-left.html">Grid Sidebar Left</a></li>
                                                    <li><a href="listing-grid-5-sidebar-right.html">Grid Sidebar Right</a></li>
                                                    <li><a href="listing-grid-6-sidebar-left.html">Grid Sidebar Left 2</a></li>
                                                    <li><a href="listing-grid-7-sidebar-right.html">Grid Sidebar Right 2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h3>Listing row &amp; Product</h3>
                                                <ul>
                                                    <li><a href="listing-row-1-sidebar-left.html">Row Sidebar Left</a></li>
                                                    <li><a href="listing-row-2-sidebar-right.html">Row Sidebar Right</a></li>
                                                    <li><a href="listing-row-3-sidebar-left.html">Row Sidebar Left 2</a></li>
                                                    <li><a href="listing-row-4-sidebar-extended.html">Row Sidebar Extended</a></li>
                                                    <li><a href="product-detail-1.html">Product Large Image</a></li>
                                                    <li><a href="product-detail-2.html">Product Carousel</a></li>
                                                    <li><a href="product-detail-3.html">Product Sticky Info</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h3>Other pages</h3>
                                                <ul>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Check Out Page</a></li>
                                                    <li><a href="confirm.html">Confirm Purchase Page</a></li>
                                                    <li><a href="account.html">Create Account Page</a></li>
                                                    <li><a href="track-order.html">Track Order</a></li>
                                                    <li><a href="help.html">Help Page</a></li>
                                                    <li><a href="help-2.html">Help Page 2</a></li>
                                                    <li><a href="leave-review.html">Leave a Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                                <div class="banner_menu">
                                                    <a href="#0">
                                                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('assets/img/banner_menu.jpg')}}" width="400" height="550" alt="" class="img-fluid lazy">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                    <!-- /menu-wrapper -->
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">Extra Pages</a>
                                    <ul>
                                        <li><a href="header-2.html">Header Style 2</a></li>
                                        <li><a href="header-3.html">Header Style 3</a></li>
                                        <li><a href="header-4.html">Header Style 4</a></li>
                                        <li><a href="header-5.html">Header Style 5</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="sign-in-modal.html">Sign In Modal</a></li>
                                        <li><a href="contacts.html">Contact Us</a></li>
                                        <li><a href="about.html">About 1</a></li>
                                        <li><a href="about-2.html">About 2</a></li>
                                        <li><a href="modal-advertise.html">Modal Advertise</a></li>
                                        <li><a href="modal-newsletter.html">Modal Newsletter</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
{{--                                <li>--}}
{{--                                    <a href="#0">Buy Template</a>--}}
{{--                                </li>--}}


                            </ul>
                        </div>
                        <!--/main-menu -->
                    </nav>
                    <div style="top: 19px !important;" class="col-xl-3  col-lg-2 d-lg-flex align-items-center justify-content-end text-right styled-select lang-selector">

                            <select onchange="location = this.value;">
                                @foreach($langs as $key=>$value)
                                    <option
                                        @if( \Illuminate\Support\Facades\App::currentLocale() == $key) selected @endif
                                        value="lang/{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>


                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /main_header -->

        <div class="main_nav Sticky">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <nav class="categories">
                            <ul class="clearfix">
                                <li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Categories
										</a>
									</span>
                                    <div id="menu">
                                        <ul>
                                            @foreach($category as $key=>$value)
                                            <li><span><a href="#0">{{$value->name}}</a></span>
                                                <ul>
                                                    @foreach($value->type as $type)
                                                        @if($type->status != 0)
                                                            <li><a href="listing-grid-1-full.html">{{$type->name}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                           @endforeach

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                        <div class="custom-search-input">
                            <form type="get" action="{{route('search')}}">

                                <input type="text" name="search_query" placeholder="Search over {{$product->count()}} products">
                                <button type="submit"><i class="header-icon_search_custom"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="search_mob_wp">
                <input type="text" class="form-control" placeholder="Search over  {{$product->count()}} products">
                <input type="submit" class="btn_1 full-width" value="Search">
            </div>
            <!-- /search_mobile -->
        </div>
        <!-- /main_nav -->
    </header>
    <!-- /header -->


{{$slot}}


    <!-- Main Footer -->
    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_1">Quick Links</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="help.html">Faq</a></li>
                            <li><a href="{{route('help')}}">Help</a></li>
                            <li><a href="account.html">My account</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_2">Categories</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="listing-grid-1-full.html">Clothes</a></li>
                            <li><a href="listing-grid-2-full.html">Electronics</a></li>
                            <li><a href="listing-grid-1-full.html">Furniture</a></li>
                            <li><a href="listing-grid-3.html">Glasses</a></li>
                            <li><a href="listing-grid-1-full.html">Shoes</a></li>
                            <li><a href="listing-grid-1-full.html">Watches</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                            <li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
                            <li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_4">Keep in touch</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
                            </div>
                        </div>
                        <div class="follow_us">
                            <h5>Follow Us</h5>
                            <ul>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/twitter_icon.svg') }}" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/facebook_icon.svg') }}" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/instagram_icon.svg') }}" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/youtube_icon.svg') }}" alt="" class="lazy"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <ul class="footer-selector clearfix">
                        <li>
                            <div class="styled-select lang-selector">

                                    <select onchange="location = this.value;">
                                        @foreach($langs as $key=>$value)
                                            <option
                                                @if( \Illuminate\Support\Facades\App::currentLocale() == $key) selected @endif
                                            value="lang/{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>


                            </div>
                        </li>
                        <li>
                            <div class="styled-select currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/cards_all.svg') }}" alt="" width="198" height="30" class="lazy"></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© 2020 Allaia</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>


<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('assets/js/common_scripts.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
{{--<script src="{{asset('assets/js/carousel-home.min.js')}}"></script>--}}


@stack('scripts')
</body>
</html>







