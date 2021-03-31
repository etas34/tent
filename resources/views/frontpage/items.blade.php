@foreach($product as $key=>$value)
    <div class="col-6 col-md-4">
        <div class="grid_item">
            <div class="con"><a href="{{route('frontpage.productdetail',[app()->getLocale(), $value])}}"> <img
                        class="img-fluid lazy image"
                        @if(file_exists(public_path("storage/images/prds_images/$value->image"))) src="{{\Intervention\Image\Facades\Image::make(public_path("storage/images/prds_images/$value->image"))->resize(120,120)->encode('data-url')}}"
                        @endif alt=""> </a></div>
            <a href="{{route('frontpage.productdetail',[app()->getLocale(), $value])}}">
                <h3>{{$value->type['name']}}{{$value->sub_title ? "-$value->sub_title" :''}}</h3></a>
            <div class="price_box"><span class="new_price">{{$value->price}}€</span></div>
        </div>
    </div>@endforeach
<div class="pagination__wrapper">{{$product->links("pagination::bootstrap-4")}}</div>
