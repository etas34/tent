<x-main-layout>
    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">



                @foreach($slider as $key=>$value)

                    <div class="owl-slide cover" style="background-image: url({{ asset("storage/images/slider_images/$value->image") }});">
                        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <div class="container">
                                <div class="row justify-content-center justify-content-md-end">
                                    <div class="col-lg-6 static">
                                        <div class="slide-text text-right white">
                                            <h2 class="owl-slide-animated owl-slide-title">{{$value->header}}</h2>
                                            <p class="owl-slide-animated owl-slide-subtitle">
                                                {{$value->description}}
                                            </p>
                                            <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach










                {{--                <div class="owl-slide cover" style="background-image: url({{ asset('assets/img/slides/slide_home_2.jpg') }});">--}}
{{--                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row justify-content-center justify-content-md-end">--}}
{{--                                <div class="col-lg-6 static">--}}
{{--                                    <div class="slide-text text-right white">--}}
{{--                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage Low</h2>--}}
{{--                                        <p class="owl-slide-animated owl-slide-subtitle">--}}
{{--                                            Limited items available at this price--}}
{{--                                        </p>--}}
{{--                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <!--/owl-slide-->
{{--                <div class="owl-slide cover" style="background-image: url({{ asset('assets/img/slides/slide_home_1.jpg') }});">--}}
{{--                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row justify-content-center justify-content-md-start">--}}
{{--                                <div class="col-lg-6 static">--}}
{{--                                    <div class="slide-text white">--}}
{{--                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax Flyknit 3</h2>--}}
{{--                                        <p class="owl-slide-animated owl-slide-subtitle">--}}
{{--                                            Limited items available at this price--}}
{{--                                        </p>--}}
{{--                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--/owl-slide-->
{{--                <div class="owl-slide cover" style="background-image: url({{ asset('assets/img/slides/slide_home_3.jpg') }});">--}}
{{--                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row justify-content-center justify-content-md-start">--}}
{{--                                <div class="col-lg-12 static">--}}
{{--                                    <div class="slide-text text-center black">--}}
{{--                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Monarch IV SE</h2>--}}
{{--                                        <p class="owl-slide-animated owl-slide-subtitle">--}}
{{--                                            Lightweight cushioning and durable support with a Phylon midsole--}}
{{--                                        </p>--}}
{{--                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/owl-slide-->--}}
{{--                </div>--}}
            </div>
            <div id="icon_drag_mobile"></div>
        </div>
        <!--/carousel-->

        <ul id="banners_grid" class="clearfix">
            @foreach($category as $key=>$value)
            <li>
                <a href="#0" class="img_container">
                    <img src="{{ asset('assets/img/banners_cat_placeholder.jpg') }}" data-src="{{asset("storage/images/cat_images/$value->image")}}" alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>{{$value->name}}</h3>
                        <div><span class="btn_1">Shop Now</span></div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
        <!--/banners_grid -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Top Selling</h2>
                <span>Products</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
            </div>
            <div class="row small-gutters">
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <figure>
                            <span class="ribbon off">-30%</span>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/1.jpg') }}" alt="">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/1_b.jpg') }}" alt="">
                            </a>
                            <div data-countdown="2019/05/15" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air x Fear</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$48.00</span>
                            <span class="old_price">$60.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon off">-30%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/2.jpg') }}" alt="">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/2_b.jpg') }}" alt="">
                            </a>
                            <div data-countdown="2019/05/10" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Okwahn II</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$90.00</span>
                            <span class="old_price">$170.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon off">-50%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/3.jpg') }}" alt="">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/3_b.jpg') }}" alt="">
                            </a>
                            <div data-countdown="2019/05/21" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Wildwood ACG</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$75.00</span>
                            <span class="old_price">$155.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/4.jpg') }}" alt="">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/4_b.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor ACG React Terra</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$110.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/5.jpg') }}" alt="">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/5_b.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/6.jpg') }}" alt="">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/6_b.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$130.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/7.jpg') }}" alt="">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/7_b.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Max 98</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$115.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/8.jpg') }}" alt="">
                                <img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('assets/img/products/shoes/8_b.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Max 720</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$120.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="featured lazy" data-bg="url({{ asset('assets/img/featured_home.jpg') }})">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container margin_60">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6 wow" data-wow-offset="150">
                            <h3>Armor<br>Air Color 720</h3>
                            <p>Lightweight cushioning and durable support with a Phylon midsole</p>
                            <div class="feat_text_block">
                                <div class="price_box">
                                    <span class="new_price">$90.00</span>
                                    <span class="old_price">$170.00</span>
                                </div>
                                <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /featured -->


    </main>
</x-main-layout>
