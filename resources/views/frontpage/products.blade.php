<x-main-layout>



        <main>
            <div class="top_banner">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                    <div class="container">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Category</a></li>
                                <li>Page active</li>
                            </ul>
                        </div>
                        <h1>Selected Category</h1>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bg_cat_shoes.jpg') }}" class="img-fluid" alt="">
            </div>
            <!-- /top_banner -->
            <div id="stick_here"></div>
            <div class="toolbox elemento_stick">
                <div class="container">
                    <ul class="clearfix">
                        <li>
                            <div class="sort_select">
                                <select name="sort" id="sort">
                                    <option value="popularity" selected="selected">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to
                                </select>
                            </div>
                        </li>
                        <li>
                            <a href="#0"><i class="ti-view-grid"></i></a>
                            <a href="listing-row-1-sidebar-left.html"><i class="ti-view-list"></i></a>
                        </li>
                        <li>
                            <a href="#0" class="open_filters">
                                <i class="ti-filter"></i><span>Filters</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /toolbox -->

            <div class="container margin_30">

                <div class="row">
                    <aside class="col-lg-3" id="sidebar_fixed">
                        <div class="filter_col">
                            <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                            <div class="filter_type version_2">
                                <h4><a href="#filter_1" data-toggle="collapse" class="opened">Categories</a></h4>
                                <div class="collapse show" id="filter_1">
                                    <ul>
                                        @foreach($category as $key=>$value)
                                        <li>
                                            <label class="container_check">{{$value->name}} <small>{{$value->product->count()}}</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <!-- /filter_type -->
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_2" data-toggle="collapse" class="opened">Color</a></h4>
                                <div class="collapse show" id="filter_2">
                                    <ul>
                                        <li>
                                            <label class="container_check">Blue <small>06</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Red <small>12</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Orange <small>17</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Black <small>43</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_3" data-toggle="collapse" class="closed">Brands</a></h4>
                                <div class="collapse" id="filter_3">
                                    <ul>
                                        <li>
                                            <label class="container_check">Adidas <small>11</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Nike <small>08</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Vans <small>05</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Puma <small>18</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_4" data-toggle="collapse" class="closed">Price</a></h4>
                                <div class="collapse" id="filter_4">
                                    <ul>
                                        <li>
                                            <label class="container_check">$0 — $50<small>11</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$50 — $100<small>08</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$100 — $150<small>05</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$150 — $200<small>18</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="buttons">
                                <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
                            </div>
                        </div>
                    </aside>
                    <!-- /col -->

                    <div class="col-lg-9">

                        <div class="row small-gutters">

                            @foreach($product as $key=>$value)
                            <div class="col-6 col-md-4">
                                <div class="grid_item">
{{--                                    <span class="ribbon hot">Hot</span>--}}
                                    <figure>
                                        <a href="{{route('frontpage.productdetail',$value)}}">
                                            <img class="img-fluid lazy" height="400" width="400" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg') }}" data-src="{{asset("storage/images/prds_images/$value->image")}}" alt="">
                                        </a>
                                    </figure>
                                    <a href="product-detail-1.html">
                                        <h3>{{$value->type['name']}}</h3>
                                    </a>
                                    <div class="price_box">
                                        <span class="new_price">{{$value->price}}€</span>
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
                            @endforeach
                        </div>
                    @if($product->count() <= 0)
                     <div align="center"> <h3>  {{'No products found'}}</h3></div> {{-- Veritabanında hiç Ürün yoksa ya da aranan sorgu bulunamadıysa yazılacak mesaj, lütfen çevirin--}}
                    @endif
                        <!-- /row -->
{{--                        {{$product->links()}}--}}
                        <div class="pagination__wrapper">
                            {{ $product->links() }}
{{--                            <ul class="pagination">--}}

{{--                                <li>--}}
{{--                                    <a href="#0" class="active">1</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#0">2</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#0">3</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#0">4</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#0" class="next" title="next page">&#10095;</a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->

            </div>
            <!-- /container -->
        </main>
        <!-- /main -->






@push('scripts')
        <script src="{{asset('assets/js/sticky_sidebar.min.js')}}"></script>
        <script src="{{asset('assets/js/specific_listing.js')}}"></script>

    @endpush
</x-main-layout>

