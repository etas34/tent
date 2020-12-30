<x-main-layout>

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">


                @foreach($slider as $key=>$value)

                    <div class="owl-slide cover"
                         style="background-image: url({{ asset("storage/images/slider_images/$value->image") }});">
                        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <div class="container">
                                <div class="row justify-content-center justify-content-md-end">
                                    <div class="col-lg-6 static">
                                        <div class="slide-text text-right white">
                                            <h2 class="owl-slide-animated owl-slide-title">{{$value->header}}</h2>
                                            <p class="owl-slide-animated owl-slide-subtitle">
                                                {{$value->description}}
                                            </p>
                                            <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                                                             href="listing-grid-1-full.html"
                                                                                             role="button">Shop Now</a>
                                            </div>
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
                        <img src="{{ asset('assets/img/banners_cat_placeholder.jpg') }}"
                             data-src="{{asset("storage/images/cat_images/$value->image")}}" alt="" class="lazy">
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
                <h2>Custom Products</h2>
                <span>Products</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
            </div>
            <div class="row small-gutters">
                @include('frontpage.items')
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    {{--        <div class="featured lazy" data-bg="url({{ asset('assets/img/featured_home.jpg') }})">--}}
    {{--            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">--}}
    {{--                <div class="container margin_60">--}}
    {{--                    <div class="row justify-content-center justify-content-md-start">--}}
    {{--                        <div class="col-lg-6 wow" data-wow-offset="150">--}}
    {{--                            <h3>Armor<br>Air Color 720</h3>--}}
    {{--                            <p>Lightweight cushioning and durable support with a Phylon midsole</p>--}}
    {{--                            <div class="feat_text_block">--}}
    {{--                                <div class="price_box">--}}
    {{--                                    <span class="new_price">$90.00</span>--}}
    {{--                                    <span class="old_price">$170.00</span>--}}
    {{--                                </div>--}}
    {{--                                <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    <!-- /featured -->


    </main>
    @push('scripts')

        <script src="{{asset('assets/js/carousel-home.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.cookiebar.js')}}"></script>

        <script>
            $(document).ready(function () {
                // 'use strict';
                $.cookieBar({
                    fixed: true
                });
            });
        </script>

    @endpush
</x-main-layout>

