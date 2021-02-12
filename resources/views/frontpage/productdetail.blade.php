<x-main-layout>


    <main class="bg_gray">
        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{route('home',app()->getLocale())}}">{{__('Home')}}</a></li>
                        <li>
                            <a href="{{route('frontpage.products',[app()->getLocale(),$product->category->id])}}">{{$product->category->name}}</a>
                        </li>
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
                        </div>
                        @if($product->image2)
                            <div class="item">
                                <a href="{{asset("storage/images/prds_images/$product->image2")}}"
                                   title="{{$product->type['name']}}" data-effect="mfp-zoom-in">
                                    <img class="img-fluid"
                                         src="{{asset("storage/images/prds_images/$product->image2")}}"
                                         alt=""></a>
                            </div>
                    @endif
                    <!-- /item -->
                    {{--                        <div class="item">--}}
                    {{--                            <a href="img/products/shoes/product_detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/products/product_placeholder_detail_2.jpg" data-src="img/products/shoes/product_detail_2.jpg" alt="" class="owl-lazy"></a>--}}
                    {{--                        </div>--}}
                    <!-- /item -->
                    </div>
                    <!-- /carousel -->
                </div>
                <div class="col-lg-4">
                    <h3>{{__('Details')}}</h3>
                    {!! $product->description!!}
                    <div class="col-lg-12">
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
                        <btn
                            data-id="{{$product->id}}"
                            data-category="{{$product->type['name']}}"
                            data-toggle="modal" data-target="#size-modal"
                            class="getInfo btn" style="background: #1b2342;
    padding: 10px 20px;
    color: #fff;
    font-size: 20px;
    margin: 0 auto;
    display: block;
    text-align: center;">{{__('Get Info')}}</btn>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>

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

                                </div>
                            </div>
                        </div>
                        <!-- /TAB A -->

                    </div>

                </div>


                <!-- /container -->
            </div>
        </div>

    </main>
    <!-- /main -->


</x-main-layout>

