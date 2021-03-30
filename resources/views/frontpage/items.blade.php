<!-- Search result will appeared here -->
<style>
    .con {
        position: relative;
        width: 100%;
        max-width: 400px;
    }

    .con img {
        width: 100%;
        height: auto;
    }

    .con .btn {
        background-color: #004dda;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
    }
    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    .con:hover .image {
        opacity: 0.9;
    }

    .con:hover .middle {
        opacity: 1;
    }

    .con .btn:hover {
        background-color: black;
    }

</style>

@foreach($product as $key=>$value)
    <div class="col-6 col-md-4">
        <div class="grid_item">
            {{--                                    <span class="ribbon hot">Hot</span>--}}
            <div class="con">

                <a
                    href="{{route('frontpage.productdetail',[app()->getLocale(), $value])}}">

                    <img class="img-fluid lazy image"
                      @if(file_exists(public_path("storage/images/prds_images/$value->image")))   src="{{\Intervention\Image\Facades\Image::make(public_path("storage/images/prds_images/$value->image"))->resize(200,200)->encode('data-url') }}" @endif
{{--                         data-src="{{asset("storage/images/prds_images/$value->image")}}"--}}
                         alt="">

                </a>


                <div class="middle"><a
                        href="#0"
                        data-id="{{$value->id}}"
                        data-category="{{$value->type['name']}}"
                        data-toggle="modal" data-target="#size-modal"
                        class="btn getInfo">Get Info</a></div>


            </div>
            <a href="{{route('frontpage.productdetail',[app()->getLocale(), $value])}}">
                <h3>{{$value->type['name']}} {{$value->sub_title ? "-$value->sub_title" :''}}</h3>
            </a>
            <div class="price_box">
                <span class="new_price">{{$value->price}}€</span>
            </div>
            <ul>
                {{--                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>--}}
                {{--                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>--}}
                {{--                    <li><a id="sign-in" class="tooltip-1" data-toggle="tooltip" data-placement="center" title="Get Information"><i class="ti-shopping-cart"></i><span>Get Information</span></a></li>--}}
                <li>
                    {{--                        <a id="sign-in" class="tooltip-1" data-toggle="tooltip" data-placement="center" title="Get Information"><i class="ti-shopping-cart"></i><span>Get Information</span></a>--}}
                    {{--                        <a id="sign-in" class="tooltip-1" data-toggle="tooltip" data-placement="center" title="Get Information"><i class="ti-shopping-cart"></i><span>Get Information</span></a>--}}
                </li>
            </ul>
        </div>
        <!-- /grid_item -->
    </div>
    <!-- /col -->
@endforeach

<div class="pagination__wrapper">
    {{ $product->links("pagination::bootstrap-4") }}
</div>


@push('scripts')
    <script>


    </script>
@endpush
