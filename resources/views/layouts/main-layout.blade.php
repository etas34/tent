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
    @toastr_css

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
                            <a href="{{route('home', app()->getLocale())}}"><img
                                    src="{{ asset('assets/img/moonzelt.svg') }}" alt="" width="100" height="35"></a>
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
                                <a href="{{route('home', app()->getLocale())}}"><img
                                        src="{{ asset('assets/img/logo_black.svg') }}" alt="" width="100"
                                        height="35"></a>
                                <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{route('home', app()->getLocale())}}"
                                       class="show-submenu">{{__('Home')}}</a>

                                </li>

                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">{{__('Category')}}</a>
                                    <ul>
                                        @foreach($category as $key=>$value)
                                            <li>
                                                <a href="{{route('frontpage.products',[app()->getLocale(), $value])}}">{{$value->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @foreach($page as $key=>$value)
                                    <li>
                                        <a href="{{route('page',[app()->getLocale(), $value])}}"
                                           class="show-submenu">{{$value->header}}</a>

                                    </li>
                                @endforeach



                                {{--                                <li class="megamenu submenu">--}}
                                {{--                                    <a href="javascript:void(0);" class="show-submenu-mega">Pages</a>--}}
                                {{--                                    <div class="menu-wrapper">--}}
                                {{--                                        <div class="row small-gutters">--}}
                                {{--                                            <div class="col-lg-3">--}}
                                {{--                                                <h3>Listing grid</h3>--}}
                                {{--                                                <ul>--}}
                                {{--                                                    <li><a href="listing-grid-1-full.html">Grid Full Width</a></li>--}}
                                {{--                                                    <li><a href="listing-grid-2-full.html">Grid Full Width 2</a></li>--}}
                                {{--                                                    <li><a href="listing-grid-3.html">Grid Boxed</a></li>--}}
                                {{--                                                    <li><a href="listing-grid-4-sidebar-left.html">Grid Sidebar Left</a></li>--}}
                                {{--                                                    <li><a href="listing-grid-5-sidebar-right.html">Grid Sidebar Right</a></li>--}}
                                {{--                                                    <li><a href="listing-grid-6-sidebar-left.html">Grid Sidebar Left 2</a></li>--}}
                                {{--                                                    <li><a href="listing-grid-7-sidebar-right.html">Grid Sidebar Right 2</a></li>--}}
                                {{--                                                </ul>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="col-lg-3">--}}
                                {{--                                                <h3>Listing row &amp; Product</h3>--}}
                                {{--                                                <ul>--}}
                                {{--                                                    <li><a href="listing-row-1-sidebar-left.html">Row Sidebar Left</a></li>--}}
                                {{--                                                    <li><a href="listing-row-2-sidebar-right.html">Row Sidebar Right</a></li>--}}
                                {{--                                                    <li><a href="listing-row-3-sidebar-left.html">Row Sidebar Left 2</a></li>--}}
                                {{--                                                    <li><a href="listing-row-4-sidebar-extended.html">Row Sidebar Extended</a></li>--}}
                                {{--                                                    <li><a href="product-detail-1.html">Product Large Image</a></li>--}}
                                {{--                                                    <li><a href="product-detail-2.html">Product Carousel</a></li>--}}
                                {{--                                                    <li><a href="product-detail-3.html">Product Sticky Info</a></li>--}}
                                {{--                                                </ul>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="col-lg-3">--}}
                                {{--                                                <h3>Other pages</h3>--}}
                                {{--                                                <ul>--}}
                                {{--                                                    <li><a href="cart.html">Cart Page</a></li>--}}
                                {{--                                                    <li><a href="checkout.html">Check Out Page</a></li>--}}
                                {{--                                                    <li><a href="confirm.html">Confirm Purchase Page</a></li>--}}
                                {{--                                                    <li><a href="account.html">Create Account Page</a></li>--}}
                                {{--                                                    <li><a href="track-order.html">Track Order</a></li>--}}
                                {{--                                                    <li><a href="help.html">Help Page</a></li>--}}
                                {{--                                                    <li><a href="help-2.html">Help Page 2</a></li>--}}
                                {{--                                                    <li><a href="leave-review.html">Leave a Review</a></li>--}}
                                {{--                                                </ul>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">--}}
                                {{--                                                <div class="banner_menu">--}}
                                {{--                                                    <a href="#0">--}}
                                {{--                                                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('assets/img/banner_menu.jpg')}}" width="400" height="550" alt="" class="img-fluid lazy">--}}
                                {{--                                                    </a>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <!-- /row -->--}}
                                {{--                                    </div>--}}
                                {{--                                    <!-- /menu-wrapper -->--}}
                                {{--                                </li>--}}
                                {{--                                <li class="submenu">--}}
                                {{--                                    <a href="javascript:void(0);" class="show-submenu">Extra Pages</a>--}}
                                {{--                                    <ul>--}}
                                {{--                                        <li><a href="header-2.html">Header Style 2</a></li>--}}
                                {{--                                        <li><a href="header-3.html">Header Style 3</a></li>--}}
                                {{--                                        <li><a href="header-4.html">Header Style 4</a></li>--}}
                                {{--                                        <li><a href="header-5.html">Header Style 5</a></li>--}}
                                {{--                                        <li><a href="404.html">404 Page</a></li>--}}
                                {{--                                        <li><a href="sign-in-modal.html">Sign In Modal</a></li>--}}
                                {{--                                        <li><a href="contacts.html">Contact Us</a></li>--}}
                                {{--                                        <li><a href="about.html">About 1</a></li>--}}
                                {{--                                        <li><a href="about-2.html">About 2</a></li>--}}
                                {{--                                        <li><a href="modal-advertise.html">Modal Advertise</a></li>--}}
                                {{--                                        <li><a href="modal-newsletter.html">Modal Newsletter</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}

                                {{--                                <li>--}}
                                {{--                                    <a href="#0">Buy Template</a>--}}
                                {{--                                </li>--}}


                            </ul>
                        </div>
                        <!--/main-menu -->
                    </nav>
                    <div style="top: 19px !important;"
                         class="col-xl-3  col-lg-2 d-lg-flex align-items-center justify-content-end text-right styled-select lang-selector">
                        {{--                        onchange="alert(location = this.value)"--}}
                        <select id="location">
                            @foreach($langs as $key=>$value)
                                <option
                                    @if( \Illuminate\Support\Facades\App::currentLocale() == $key) selected @endif
                                value="{{$key}}">{{$value}}</option>
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
											{{__('Categories')}}
										</a>
									</span>
                                    <div id="menu">
                                        <ul>
                                            @foreach($category as $key=>$value)
                                                <li><span><a
                                                            href="{{route('frontpage.products',[app()->getLocale(),$value])}}">{{$value->name}}</a></span>
                                                    <ul>
                                                        @foreach($value->type as $type)
                                                            @if($type->status != 0)
                                                                <li>
                                                                    <a href="{{url(app()->getLocale().'/category/'.$value->id."/".$type->id)}}">{{$type->name}}</a>
                                                                </li>
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

                            <input type="text" id="searchinput"
                                   placeholder="Search over {{$product->count()}} products">
                            <button type="submit" onclick="searchFunc();"><i class="header-icon_search_custom"></i>
                            </button>


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
                    <h3 data-target="#collapse_1">{{__('Quick Links')}}</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="{{route('about', app()->getLocale())}}">{{__('About us')}}</a></li>
                            <li><a href="help.html">{{__('Faq')}}</a></li>
                            <li><a href="{{route('help', app()->getLocale())}}">{{__('Help')}}</a></li>
                            <li><a href="account.html">{{__('My account')}}</a></li>
                            <li><a href="blog.html">{{__('Blog')}}</a></li>
                            <li><a href="{{route('contact', app()->getLocale())}}">{{__('Contacts')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_2">{{_('Categories')}}</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            @foreach($category as $key=>$value)
                                <li>
                                    <a href="{{route('frontpage.products',[app()->getLocale(), $value])}}">{{$value->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_3">{{__('Contacts')}}</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="ti-home"></i>{{__('Baker st. 567')}}<br>{{__('Los Angeles - US')}}</li>
                            <li><i class="ti-headphone-alt"></i>{{__('+94 423-23-221')}}</li>
                            <li><i class="ti-email"></i><a href="#0">{{__('info@allaia.com')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="collapse dont-collapse-sm" id="collapse_4">

                        <div class="follow_us">
                            <h5>{{__('Follow Us')}}</h5>
                            <ul>
                                <li><a href="#0"><img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                            data-src="{{ asset('assets/img/twitter_icon.svg') }}" alt=""
                                            class="lazy"></a></li>
                                <li><a href="#0"><img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                            data-src="{{ asset('assets/img/facebook_icon.svg') }}" alt="" class="lazy"></a>
                                </li>
                                <li><a href="#0"><img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                            data-src="{{ asset('assets/img/instagram_icon.svg') }}" alt="" class="lazy"></a>
                                </li>
                                <li><a href="#0"><img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                            data-src="{{ asset('assets/img/youtube_icon.svg') }}" alt=""
                                            class="lazy"></a></li>
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
                        {{--                        <li>--}}
                        {{--                            <div class="styled-select lang-selector">--}}
                        {{--                                <select id="location" >--}}
                        {{--                                    @foreach($langs as $key=>$value)--}}
                        {{--                                        <option--}}
                        {{--                                            @if( \Illuminate\Support\Facades\App::currentLocale() == $key) selected @endif--}}
                        {{--                                        value="{{$key}}">{{$value}}</option>--}}
                        {{--                                    @endforeach--}}
                        {{--                                </select>--}}


                        {{--                            </div>--}}
                        {{--                        </li>--}}
                        <li>

                        </li>
                        <li><img
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                data-src="{{ asset('assets/img/cards_all.svg') }}" alt="" width="198" height="30"
                                class="lazy"></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">{{__('Terms and conditions')}}</a></li>
                        <li><a href="#0">{{__('Privacy')}}</a></li>
                        <li><span>{{__('© 2020 OnderTak')}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="size-modal" id="size-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="title" class="modal-title">


                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <h5>{{__('Specifications')}}</h5>
                <div class="table-responsive">
                    <table class="table table-sm table-striped">
                        <tbody>
                        <tr id="priceQ">
                            <td><strong>{{__('Price')}}</strong></td>
                            <td id="price">null</td>
                        </tr>
                        <tr id="widthQ">
                            <td><strong>{{__('Width')}}</strong></td>
                            <td id="width">null</td>
                        </tr>
                        <tr id="lengthQ">
                            <td><strong>{{__('Length')}}</strong></td>
                            <td id="length">null</td>
                        </tr>

                        <tr id="pricem2Q">
                            <td><strong>{{__('Price/m²')}}</strong></td>
                            <td id="pricem2">null</td>
                        </tr>

                        <tr id="doorQ">
                            <td><strong>{{__('Door')}}</strong></td>
                            <td id="door">null</td>
                        </tr>
                        <tr id="insulationQ">
                            <td><strong>{{__('Insulation')}}</strong></td>
                            <td id="insulation">null</td>
                        </tr>
                        <tr id="steepHQ">
                            <td><strong>{{__('Steep height')}}</strong></td>
                            <td id="steepH">null</td>
                        </tr>
                        <tr id="heigthMAQ">
                            <td><strong>{{__('Height middle area')}}</strong></td>
                            <td id="heigthMA">null</td>
                        </tr>
                        <tr id="squareMQ">
                            <td><strong>{{__('Square meters')}}</strong></td>
                            <td id="squareM">null</td>
                        </tr>
                        <tr id="footHQ">
                            <td><strong>{{__('Foot height')}}</strong></td>
                            <td id="footH">null</td>
                        </tr>
                        <tr id="footCQ">
                            <td><strong>{{__('Foot count')}}</strong></td>
                            <td id="footC">null</td>
                        </tr>

                        <tr id="diameterQ">
                            <td><strong>{{__('Diameter')}}</strong></td>
                            <td id="diameter">null</td>
                        </tr>

                        <tr id="verpackungQ">
                            <td><strong>{{__('verpackung')}}</strong></td>
                            <td id="verpackung">null</td>
                        </tr>

                        <tr id="gewichtQ">
                            <td><strong>{{__('gewicht')}}</strong></td>
                            <td id="gewicht">null</td>
                        </tr>

                        <tr id="fur_personenQ">
                            <td><strong>{{__('für personen')}}</strong></td>
                            <td id="fur_personen">null</td>
                        </tr>


                        </tbody>
                    </table>
                    <!-- /table-responsive -->
                </div>
                <form class="mt-4" method="post" action="{{route('getInfo',app()->getLocale())}}">
                    @csrf

                    <input required type="text" id="product_id" hidden name="product_id">

                    <h5>Contact Us</h5>
                    <div class="form-group">
                        <label for="fullName">{{__('Full Name')}}</label>
                        <input required type="text" name="full_name" class="form-control" id="fullName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('Email address')}}</label>
                        <input required type="email" name="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('Message')}}</label>
                        <textarea required name="message" class="form-control"></textarea>
                    </div>
                    <div class="text-center form-group">
                        <input required type="submit" value="{{__('Get Info')}}" class="btn_1 full-width">
                    </div>
                </form>

                <!-- /table -->
            </div>
        </div>
    </div>
</div>


<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('assets/js/common_scripts.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

@toastr_js
@toastr_render


<!-- SPECIFIC SCRIPTS -->
{{--<script src="{{asset('assets/js/carousel-home.min.js')}}"></script>--}}


@stack('scripts')


<script>

    //ajax
    $(document).on("click", ".getInfo", function () {
        var id = $(this).data('id');
        $('#product_id').val(id)
        console.log(`api/getInfo/${id}`)
        $('#title').text($(this).data('category'))
        $.get({
            type: "GET",
            url: `{{URL::to('/')}}/api/getInfo/${id}`,
            cache: false,

            success: (response) => {
                console.log(response)

                if (response.product.price === null)
                    $('#priceQ').hide()
                if (response.product.width === null)
                    $('#widthQ').hide()
                if (response.product.length === null)
                    $('#lengthQ').hide()
                if (response.product.door === null)
                    $('#pricem2Q').hide()
                if (response.product.price_m2 === null)
                    $('#doorQ').hide()
                if (response.insulation === '')
                    $('#insulationQ').hide()
                if (response.product.steep_height === null)
                    $('#steepHQ').hide()
                if (response.product.height_middle === null)
                    $('#heigthMAQ').hide()
                if (response.product.square_meters === null)
                    $('#squareMQ').hide()
                if (response.product.foot_height === null)
                    $('#footHQ').hide()
                if (response.product.foot_count === null)
                    $('#footCQ').hide()
                if (response.product.diameter === null)
                    $('#diameterQ').hide()
                if (response.product.verpackung === null)
                    $('#verpackungQ').hide()
                if (response.product.gewicht === null)
                    $('#gewichtQ').hide()
                if (response.product.fur_personen === null)
                    $('#fur_personenQ').hide()

                $('#price').text(response.product.price + ' €')
                $('#width').text(response.product.width + ' m')
                $('#length').text(response.product.length + ' m')
                $('#door').text(response.product.door + ' m')
                $('#pricem2').text(response.product.price_m2 + ' m')
                $('#insulation').text(response.insulation)
                $('#steepH').text(response.product.steep_height + ' m')
                $('#heigthMA').text(response.product.height_middle + ' m')
                $('#squareM').text(response.product.square_meters + ' m²')
                $('#footH').text(response.product.foot_height + ' m')
                $('#footC').text(response.product.foot_count)
                $('#diameter').text(response.product.diameter)
                $('#verpackung').text(response.product.verpackung)
                $('#gewicht').text(response.product.gewicht)
                $('#fur_personen').text(response.product.fur_personen)


            },


        });


        // As pointed out in comments,
        // it is unnecessary to have to manually call the modal.
        // $('#addBookDialog').modal('show');
    });
    $('#searchinput').keypress(function (e) {
        if (e.which === 13) {
            searchFunc()
        }
    });

    function searchFunc() {
        var text = $('#searchinput').val();
        var locate = "{{ config('app.locale')}}";
        // window.location='http://www.example.com';
        var url = "{{URL::to(app()->getLocale(),'search')}}" + "/" + text;
        window.location.href = url;
    }

    $(() => {
        $('#location').on('change', () => {
            let selectVal = $("#location option:selected").val()
            let lKey = location.toString().split('/')[3]
            location = location.toString().replace(lKey, selectVal)

        });
    })
</script>

</body>
</html>







