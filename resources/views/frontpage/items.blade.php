    <!-- Search result will appeared here -->
    @foreach($product as $key=>$value)
        <div class="col-6 col-md-4">
            <div class="grid_item">
                {{--                                    <span class="ribbon hot">Hot</span>--}}
                <figure>
                    <a href="{{route('frontpage.productdetail',$value)}}">
                        <img class="img-fluid lazy" height="400" width="400" src="{{asset("storage/images/prds_images/$value->image")}}" data-src="{{asset("storage/images/prds_images/$value->image")}}" alt="">
                    </a>
                </figure>
                <a href="{{route('frontpage.productdetail',$value)}}">
                    <h3>{{$value->type['name']}}</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">{{$value->price}}€</span>
                </div>
{{--                <ul>--}}
{{--                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>--}}
{{--                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>--}}
{{--                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>--}}
{{--                </ul>--}}
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
    @endforeach

<div class="pagination__wrapper">
    {{ $product->links("pagination::bootstrap-4") }}
</div>
