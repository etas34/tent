<x-main-layout>
    {{ __('title2')}}
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
                                            {{--                                            <h2 class="owl-slide-animated owl-slide-title">{{$value->header}}</h2>--}}
                                            {{--                                            <p class="owl-slide-animated owl-slide-subtitle">--}}
                                            {{--                                                {{$value->description}}--}}
                                            {{--                                            </p>--}}
                                            <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                                                             href="listing-grid-1-full.html"
                                                                                             role="button">{{__('Shop Now')}}</a>
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
                            <div><span class="btn_1">{{__('Shop Now')}}</span></div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>

        <!--/banners_grid -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>{{__('Custom Products')}}</h2>
                <span>{{__('Products')}}</span>
                <p>{{__('Top selling products')}}</p>
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
    {{--    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="size-modal" id="size-modal" aria-hidden="true">--}}
    {{--        <div class="modal-dialog modal-dialog-centered">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 id="title" class="modal-title">--}}

    {{--                        Fachwerkbinder-Fünfeck 7-8-10-12-13m--}}


    {{--                    </h5>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                        <i class="ti-close"></i>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body py-5">--}}
    {{--                        <h3 >Specifications</h3>--}}
    {{--                        <div class="table-responsive">--}}
    {{--                            <table class="table table-sm table-striped">--}}
    {{--                                <tbody>--}}


    {{--                                <tr>--}}
    {{--                                    <td><strong>Price</strong></td>--}}
    {{--                                    <td id="price">null</td>--}}
    {{--                                </tr>--}}
    {{--                                <td><strong>Width</strong></td>--}}
    {{--                                <td id="width">null</td>--}}

    {{--                                <tr>--}}
    {{--                                    <td><strong>Length</strong></td>--}}
    {{--                                    <td id="length">null</td>--}}
    {{--                                </tr>--}}
    {{--                                <tr>--}}
    {{--                                    <td><strong>Door</strong></td>--}}
    {{--                                    <td id="door">null</td>--}}
    {{--                                </tr>--}}



    {{--                                </tbody>--}}
    {{--                            </table>--}}
    {{--                        <!-- /table-responsive -->--}}
    {{--                    </div>--}}
    {{--                    <form class="py-4">--}}
    {{--                        <h3>Contact Us</h3>--}}
    {{--                        <div class="form-group">--}}
    {{--                            <label for="fullName">Full Name</label>--}}
    {{--                            <input type="text" class="form-control" id="fullName" >--}}
    {{--                        </div>--}}
    {{--                         <div class="form-group">--}}
    {{--                            <label for="exampleInputEmail1">Email address</label>--}}
    {{--                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
    {{--                        </div>--}}
    {{--                        <div class="text-center form-group">--}}
    {{--                            <input type="submit" value="Get Info" class="btn_1 full-width">--}}
    {{--                        </div>--}}
    {{--                    </form>--}}

    {{--                    <!-- /table -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    @push('scripts')

        <script src="{{asset('assets/js/carousel-home.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.cookiebar.js')}}"></script>

        <script>
            {{--            //ajax--}}
            {{--            $(document).on("click", ".getInfo", function () {--}}
            {{--                var id = $(this).data('id');--}}
            {{--                $('#title').text($(this).data('category'))--}}
            {{--                $.get({--}}
            {{--                    type: "GET",--}}
            {{--                    url: `api/getInfo/${id}`,--}}
            {{--                    cache:false,--}}

            {{--                    success: (response)=>{--}}
            {{--                        console.log(response.category.name["{{App::getLocale()}}"])--}}
            {{--                        $('#price').text(response.product.price + ' €')--}}
            {{--                        $('#width').text(response.product.width + ' m')--}}
            {{--                        $('#length').text(response.product.length + ' m')--}}
            {{--                        $('#door').text(response.product.door + ' m')--}}


            {{--                    },--}}


            {{--                });--}}


            {{--                // As pointed out in comments,--}}
            {{--                // it is unnecessary to have to manually call the modal.--}}
            {{--                // $('#addBookDialog').modal('show');--}}
            {{--            });--}}

            $(document).ready(function () {
                // 'use strict';
                $.cookieBar({
                    fixed: true
                });


            });
        </script>

    @endpush
</x-main-layout>

