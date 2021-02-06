<x-main-layout>


    <main class="bg_gray">
        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">{{__('Home')}}</a></li>
                        <li><a href="#">{{__('Category')}}</a></li>
                        <li>{{$product->type['name']}}</li>
                    </ul>
                </div>
                <h1>{{$product->type['name']}}</h1>
            </div>
            <!-- /page_header -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme prod_pics magnific-gallery">
                        <div class="item">
                            <a href="{{asset("storage/images/prds_images/$product->image")}}"
                               title="{{$product->type['name']}}" data-effect="mfp-zoom-in">
                                <img class="img-fluid"
                                     src="{{asset("storage/images/prds_images/$product->image")}}"
                                     alt=""></a>
                            <btn
                               data-id="{{$product->id}}"
                               data-category="{{$product->type['name']}}"
                               data-toggle="modal" data-target="#size-modal"
                               class="getInfo btn">{{__('Get Info')}}</btn>
                        </div>
                        <!-- /item -->
                    {{--                        <div class="item">--}}
                    {{--                            <a href="img/products/shoes/product_detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/products/product_placeholder_detail_2.jpg" data-src="img/products/shoes/product_detail_2.jpg" alt="" class="owl-lazy"></a>--}}
                    {{--                        </div>--}}
                    <!-- /item -->
                    </div>
                    <!-- /carousel -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    {{--        <div class="bg_white">--}}
    {{--            <div class="container margin_60_35">--}}
    {{--                <div class="row justify-content-between">--}}
    {{--                    <div class="col-lg-6">--}}
    {{--                        <div class="prod_info version_2">--}}
    {{--                            <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>--}}
    {{--                            <p><small>SKU: MTKRY-001</small><br>Lorem ipsum dolor sit amet, his no adipisci pericula conclusionemque. Qui labore salutandi ex, vivendum argumentum mediocritatem vis eu, viris tritani per id. At iudicabit maluisset vis, dicant diceret pri cu. Cum at rebum vulputate forensibus, eruditi principes ad vel, pro denique recusabo at. Ubique nominavi delicata sit cu, quo no reque insolens suscipiantur.</p>--}}
    {{--                            <p>Et phaedrum temporibus per. Antiopam posidonium et est. Eu ius quas modus suavitate, ex sea feugiat laoreet voluptatum. Quo at veritus ancillae complectitur, duo no assum omnes.</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-5">--}}
    {{--                        <div class="prod_options version_2">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-xl-7 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>--}}
    {{--                                <div class="col-xl-5 col-lg-5 col-md-6 col-6 colors">--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#0" class="color color_1 active"></a></li>--}}
    {{--                                        <li><a href="#0" class="color color_2"></a></li>--}}
    {{--                                        <li><a href="#0" class="color color_3"></a></li>--}}
    {{--                                        <li><a href="#0" class="color color_4"></a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-xl-7 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a href="#0" data-toggle="modal" data-target="#size-modal"><i class="ti-help-alt"></i></a></label>--}}
    {{--                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">--}}
    {{--                                    <div class="custom-select-form">--}}
    {{--                                        <select class="wide">--}}
    {{--                                            <option value="" selected="">Small (S)</option>--}}
    {{--                                            <option value="">M</option>--}}
    {{--                                            <option value=" ">L</option>--}}
    {{--                                            <option value=" ">XL</option>--}}
    {{--                                        </select>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>--}}
    {{--                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">--}}
    {{--                                    <div class="numbers-row">--}}
    {{--                                        <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">--}}
    {{--                                        <div class="inc button_inc">+</div>--}}
    {{--                                        <div class="dec button_inc">-</div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mt-3">--}}
    {{--                                <div class="col-lg-7 col-md-6">--}}
    {{--                                    <div class="price_main"><span class="new_price">$148.00</span><span class="percentage">-20%</span> <span class="old_price">$160.00</span></div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-lg-5 col-md-6">--}}
    {{--                                    <div class="btn_add_to_cart"><a href="#0" class="btn_1">Add to Cart</a></div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- /row -->--}}
    {{--            </div>--}}
    {{--        </div>--}}
    <!-- /bg_white -->

        <div class="tabs_product bg_white version_2">
            <div class="container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab"
                           role="tab">Description</a>
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Reviews</a>--}}
                    {{--                    </li>--}}
                </ul>
            </div>
        </div>
        <!-- /tabs_product -->

        <div style="background-color: white !important" class="tab_content_wrapper">
            <div class="container">
                <div class="tab-content" role="tablist">
                    <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
                        <div class="card-header" role="tab" id="heading-A">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="false"
                                   aria-controls="collapse-A">
                                    {{__('Description')}}
                                </a>
                            </h5>
                        </div>

                        <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6">
                                        <h3>{{__('Details')}}</h3>
                                        {!! $product->description!!}
                                    </div>

                                    <div class="col-lg-5">
                                        <h3>{{__('Specifications')}}</h3>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-striped">
                                                <tbody>


                                                <tr>
                                                    <td><strong>{{__('Price')}}</strong></td>
                                                    <td>{{$product->price}} €</td>
                                                </tr>
                                                <td><strong>{{__('Width')}}</strong></td>
                                                <td>{{$product->width}} m</td>

                                                <tr>
                                                    <td><strong>{{__('Length')}}</strong></td>
                                                    <td>{{$product->length}} m</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>{{__('Price/m²')}}</strong></td>
                                                    <td>{{$product->price_m2}} €</td>
                                                </tr>
                                                @if($product->insulation)
                                                    <tr>
                                                        <td><strong>{{__('Insulation')}}</strong></td>
                                                        <td>{{$product->insulation->name}}</td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td><strong>{{__('Door')}}</strong></td>
                                                    <td>{{$product->door}} m</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>{{__('Steep height')}}</strong></td>
                                                    <td>{{$product->steep_height}} m</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>{{__('Height middle area')}}</strong></td>
                                                    <td>{{$product->height_middle}} m</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>{{__('Square meters')}}</strong></td>
                                                    <td>{{$product->square_meters}} m²</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>{{__('Foot height')}}</strong></td>
                                                    <td>{{$product->foot_height}} m</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>{{__('Foot count')}}</strong></td>
                                                    <td>{{$product->foot_count}}</td>
                                                </tr>
                                                <td><strong>{{__('Diameter')}}</strong></td>
                                                <td>{{$product->diameter}}</td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /TAB A -->
                {{--                    <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">--}}
                {{--                        <div class="card-header" role="tab" id="heading-B">--}}
                {{--                            <h5 class="mb-0">--}}
                {{--                                <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">--}}
                {{--                                    Reviews--}}
                {{--                                </a>--}}
                {{--                            </h5>--}}
                {{--                        </div>--}}
                {{--                        <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">--}}
                {{--                            <div class="card-body">--}}
                {{--                                <div class="row justify-content-between">--}}
                {{--                                    <div class="col-lg-5">--}}
                {{--                                        <div class="review_content">--}}
                {{--                                            <div class="clearfix add_bottom_10">--}}
                {{--                                                <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>--}}
                {{--                                                <em>Published 54 minutes ago</em>--}}
                {{--                                            </div>--}}
                {{--                                            <h4>"Commpletely satisfied"</h4>--}}
                {{--                                            <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="col-lg-5">--}}
                {{--                                        <div class="review_content">--}}
                {{--                                            <div class="clearfix add_bottom_10">--}}
                {{--                                                <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><i class="icon-star empty"></i><em>4.0/5.0</em></span>--}}
                {{--                                                <em>Published 1 day ago</em>--}}
                {{--                                            </div>--}}
                {{--                                            <h4>"Always the best"</h4>--}}
                {{--                                            <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <!-- /row -->--}}
                {{--                                <div class="row justify-content-between">--}}
                {{--                                    <div class="col-lg-5">--}}
                {{--                                        <div class="review_content">--}}
                {{--                                            <div class="clearfix add_bottom_10">--}}
                {{--                                                <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><em>4.5/5.0</em></span>--}}
                {{--                                                <em>Published 3 days ago</em>--}}
                {{--                                            </div>--}}
                {{--                                            <h4>"Outstanding"</h4>--}}
                {{--                                            <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="col-lg-5">--}}
                {{--                                        <div class="review_content">--}}
                {{--                                            <div class="clearfix add_bottom_10">--}}
                {{--                                                <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>--}}
                {{--                                                <em>Published 4 days ago</em>--}}
                {{--                                            </div>--}}
                {{--                                            <h4>"Excellent"</h4>--}}
                {{--                                            <p>Sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <!-- /row -->--}}
                {{--                                <p class="text-right"><a href="leave-review.html" class="btn_1">Leave a review</a></p>--}}
                {{--                            </div>--}}
                {{--                            <!-- /card-body -->--}}
                {{--                        </div>--}}

                {{--                    </div>--}}
                <!-- /tab B -->
                </div>
                <!-- /tab-content -->
                {{--            <div class="col-md-12">--}}
                {{--                <div class="col-lg-3 col-md-3 text-right" >--}}
                {{--                    <div class="btn_add_to_cart"><a href="#0" class="btn_1">Add to Cart</a></div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>


            <!-- /container -->
        </div>
        <!-- /tab_content_wrapper -->

    {{--        <div class="bg_white">--}}
    {{--            <div class="container margin_60_35">--}}
    {{--                <div class="main_title">--}}
    {{--                    <h2>Related</h2>--}}
    {{--                    <span>Products</span>--}}
    {{--                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>--}}
    {{--                </div>--}}
    {{--                <div class="owl-carousel owl-theme products_carousel">--}}
    {{--                    <div class="item">--}}
    {{--                        <div class="grid_item">--}}
    {{--                            <span class="ribbon new">New</span>--}}
    {{--                            <figure>--}}
    {{--                                <a href="product-detail-1.html">--}}
    {{--                                    <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">--}}
    {{--                                </a>--}}
    {{--                            </figure>--}}
    {{--                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
    {{--                            <a href="product-detail-1.html">--}}
    {{--                                <h3>ACG React Terra</h3>--}}
    {{--                            </a>--}}
    {{--                            <div class="price_box">--}}
    {{--                                <span class="new_price">$110.00</span>--}}
    {{--                            </div>--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <!-- /grid_item -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /item -->--}}
    {{--                    <div class="item">--}}
    {{--                        <div class="grid_item">--}}
    {{--                            <span class="ribbon new">New</span>--}}
    {{--                            <figure>--}}
    {{--                                <a href="product-detail-1.html">--}}
    {{--                                    <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5.jpg" alt="">--}}
    {{--                                </a>--}}
    {{--                            </figure>--}}
    {{--                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
    {{--                            <a href="product-detail-1.html">--}}
    {{--                                <h3>Air Zoom Alpha</h3>--}}
    {{--                            </a>--}}
    {{--                            <div class="price_box">--}}
    {{--                                <span class="new_price">$140.00</span>--}}
    {{--                            </div>--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <!-- /grid_item -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /item -->--}}
    {{--                    <div class="item">--}}
    {{--                        <div class="grid_item">--}}
    {{--                            <span class="ribbon hot">Hot</span>--}}
    {{--                            <figure>--}}
    {{--                                <a href="product-detail-1.html">--}}
    {{--                                    <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8.jpg" alt="">--}}
    {{--                                </a>--}}
    {{--                            </figure>--}}
    {{--                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
    {{--                            <a href="product-detail-1.html">--}}
    {{--                                <h3>Air Color 720</h3>--}}
    {{--                            </a>--}}
    {{--                            <div class="price_box">--}}
    {{--                                <span class="new_price">$120.00</span>--}}
    {{--                            </div>--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <!-- /grid_item -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /item -->--}}
    {{--                    <div class="item">--}}
    {{--                        <div class="grid_item">--}}
    {{--                            <span class="ribbon off">-30%</span>--}}
    {{--                            <figure>--}}
    {{--                                <a href="product-detail-1.html">--}}
    {{--                                    <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/2.jpg" alt="">--}}
    {{--                                </a>--}}
    {{--                            </figure>--}}
    {{--                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
    {{--                            <a href="product-detail-1.html">--}}
    {{--                                <h3>Okwahn II</h3>--}}
    {{--                            </a>--}}
    {{--                            <div class="price_box">--}}
    {{--                                <span class="new_price">$90.00</span>--}}
    {{--                                <span class="old_price">$170.00</span>--}}
    {{--                            </div>--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <!-- /grid_item -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /item -->--}}
    {{--                    <div class="item">--}}
    {{--                        <div class="grid_item">--}}
    {{--                            <span class="ribbon off">-50%</span>--}}
    {{--                            <figure>--}}
    {{--                                <a href="product-detail-1.html">--}}
    {{--                                    <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/3.jpg" alt="">--}}
    {{--                                </a>--}}
    {{--                            </figure>--}}
    {{--                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
    {{--                            <a href="product-detail-1.html">--}}
    {{--                                <h3>Air Wildwood ACG</h3>--}}
    {{--                            </a>--}}
    {{--                            <div class="price_box">--}}
    {{--                                <span class="new_price">$75.00</span>--}}
    {{--                                <span class="old_price">$155.00</span>--}}
    {{--                            </div>--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>--}}
    {{--                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <!-- /grid_item -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /item -->--}}
    {{--                </div>--}}
    {{--                <!-- /products_carousel -->--}}
    {{--            </div>--}}
    {{--            <!-- /container -->--}}
    {{--        </div>--}}
    <!-- /bg_white -->

    </main>
    <!-- /main -->


</x-main-layout>

