<x-main-layout>



        <main>
            <div class="top_banner">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                    <div class="container">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{route('home',app()->getLocale())}}">{{__('Home')}}</a></li>
                                <li><a href="{{route('frontpage.products',[app()->getLocale(),$category->id])}}">{{$category->name}}</a></li>
                                {{--                                <li>{{$secili_model}}</li>--}}
                                <li>{{$secili_model->name ?? ''}}</li>
                            </ul>
                        </div>
                        <h1>{{$category->name ?? ''}}</h1>
                    </div>
                </div>

                <img src="{{asset("storage/images/banner_images/$category->banner")}}" class="img-fluid" alt="">

            </div>
            <!-- /top_banner -->
            <div id="stick_here"></div>
            <div class="toolbox elemento_stick">
                <div class="container">
                    <ul class="clearfix">
{{--                        <li>--}}
{{--                            <div class="sort_select">--}}
{{--                                <select name="sort" id="sort">--}}
{{--                                    <option value="popularity" selected="selected">Sort by popularity</option>--}}
{{--                                    <option value="rating">Sort by average rating</option>--}}
{{--                                    <option value="date">Sort by newness</option>--}}
{{--                                    <option value="price">Sort by price: low to high</option>--}}
{{--                                    <option value="price-desc">Sort by price: high to--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li></li>
                        <li>
                            <a href="#0" class="open_filters">
                                <i class="ti-filter"></i><span>{{__('Filters')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /toolbox -->

            <div class="container margin_30">

                <div class="row">
                    <aside class="col-lg-3" id="sidebar_fixed" >

                        <div class="filter_col">

                            <input type="hidden" id="category_id" value="{{$category->id}}">

                            <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>

                            <h6>{{__('Models')}}</h6>
                            <div class="row">
                                <div class="col-md-12 form-group" id="model">
                                    @include('frontpage.models')
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_3" data-toggle="collapse" class="opened">{{__('Width')}}</a></h4>
                                <div class="collapse show" id="filter_3">
                                    <div class="row" id="result_widths">

                                        @include('frontpage.widths')
                                    </div>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_4" data-toggle="collapse" class="opened">{{__('Length')}}</a></h4>
                                <div class="collapse show" id="filter_4">
                                    <div class="row" id="result_lengths">

                                        @include('frontpage.lengths')
                                    </div>
                                </div>
                            </div>


                            <!-- /filter_type -->
                            <div class="filter_type version_2 diameter_show">
                                <h4><a href="#filter_4" data-toggle="collapse" class="opened">{{__('Diameter')}}</a></h4>
                                <div class="collapse show" id="filter_4">
                                    <div class="row" id="result_diameters">

                                        @include('frontpage.diameters')
                                    </div>
                                </div>
                            </div>


                            <h6 class="ins_group">{{__('Insulation')}}</h6>
                            <div class="row ins_group" >
                                <div class="col-md-12 form-group">

                                    @include('frontpage.insulations')

                                </div>
                            </div>

                            <!-- /filter_type -->
                            <div class="filter_type version_2 ins_group">
                                <h4><a href="#filter_5" data-toggle="collapse" class="opened">{{__('Door')}}</a></h4>
                                <div class="collapse show" id="filter_5">
                                    <div class="row" id="result_doors">

                                        @include('frontpage.doors')
                                    </div>
                                </div>
                            </div>


                            <!-- /filter_type -->
                            <div class="buttons">
                                <a href="#0" class="btn_1 open_filters">{{__('Filter')}}</a>
                            </div>
                        </div>

                    </aside>
                    <!-- /col -->

                    <div class="col-lg-9">

                        <div class="row small-gutters"  id="result">

                        @include('frontpage.items')

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

<script>
    $(document).on('click','.pagination a',function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        var page = url.split('page=')[1];
        window.history.pushState("", "", url);
        filtre(page);
    });
var xhr = new XMLHttpRequest();
function filtre(page){
    var csrf = "{{ csrf_token() }}";
    // var search = $("#search").val();
    var category_id;
    var type_id;
    var insulation_id;
    var widths = [];
    var lengths = [];
    var diameters = [];
    var doors = [];
    // var colors = [];
    // var offers = [];
    // var price = $("#amount").val();
    // var sorting = $("#sorting").val();
    // var direction = $("#direction").val();
    // var qty = $("#qty").val();
    // var categoryName = [];
    // var typeName = [];
    // var brandName = [];
    // var colorName = [];
    // var offerName = [];

    category_id=$("#category_id").val();
    type_id=$("#modelselectbox").val();
    insulation_id=$("#insulationselectbox").val();

    $(".cb_width:checked").each(function(){
        widths.push($(this).val());
    });
    $(".cb_length:checked").each(function(){
        lengths.push($(this).val());
    });

    $(".cb_diameter:checked").each(function(){
        diameters.push($(this).val());
    });
    $(".cb_door:checked").each(function(){
        doors.push($(this).val());
    });
    if(xhr !== 'undefined'){
        xhr.abort(); //stop existing ajax request if new request has been sent to server
    }
    xhr = $.ajax({
        url: '{{route('filtre', app()->getLocale())}}',
        data: {_token:csrf,category_id:category_id,type_id:type_id,insulation_id:insulation_id,widths:widths,lengths:lengths,diameters:diameters,doors:doors,page:page},
        type: 'post',
        beforeSend:function(){
            $("#result").html('<img src="{{ asset('assets/img/spinner.gif') }}" alt=""/>')
        }
    }).done(function(e){
        // console.log(e)

        $("#result").html($(e.view_products));
        $("#model").html($(e.view_models));
        $("#result_widths").html($(e.view_widths));
        $("#result_lengths").html($(e.view_lengths));
        $("#result_diameters").html($(e.view_diameters));
        $("#result_doors").html($(e.view_doors));

        // Jquery select
        $('.custom-select-form select').niceSelect();
        $('.custom-select-form select').niceSelect('update');
        //pagination(e['rows'],e['qty'],e['active']);
        //window.history.pushState('page2', 'Title', this.url); // still in test
    });

    if(category_id==1)
    {
        $('.ins_group').show();
        $('.diameter_show').hide();

    }
    else if(category_id==2)
    {
        $('.ins_group').hide();
        $('.diameter_show').show();
        $('#insulationselectbox').val('0');
    }
    else{
        $('#insulationselectbox').val('0');
        $('.ins_group').hide();
        $('.diameter_show').hide();
    }
}
</script>

<script>
    $(document).ready(function(){
        if($("#category_id").val()==1)
        {
            $('.ins_group').show();
            $('.diameter_show').hide();

        }
        else if($("#category_id").val()==2)
        {
            $('.ins_group').hide();
            $('.diameter_show').show();
            $('#insulationselectbox').val('0');

        }
        else{
            $('#insulationselectbox').val('0');
            $('.ins_group').hide();
        }
    });


    $(document).on('click', '.cb_width', function(){
        filtre();
    });
    $(document).on('click', '.cb_length', function(){
        filtre();
    });

    $(document).on('click', '.cb_diameter', function(){
        filtre();
    });
    $(document).on('change', '#modelselectbox', function(){
        filtre();
    });
   $(document).on('change', '#insulationselectbox', function(){
        filtre();
    });

    $(document).on('click', '.cb_door', function(){
        filtre();
    });
</script>

@endpush

@push('scripts')
        <script src="{{asset('assets/js/sticky_sidebar.min.js')}}"></script>
        <script src="{{asset('assets/js/specific_listing.js')}}"></script>

    @endpush
</x-main-layout>

