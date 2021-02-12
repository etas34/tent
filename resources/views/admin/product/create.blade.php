<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create a Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.product.store', app()->getLocale())}}" method="post" autocomplete="off"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                                <label for="exampleInputFile">Product Image (400 X 400)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input  type="file" required name="image" class="custom-file-input" accept="image/*" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>

                                </div>
                        </div>

                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>Choose a Category</label>
                            <select name="category_id" id="category" class="form-control" required>
                                <option value="" disabled selected>Select a Category</option>
                            @foreach($categories as $key=>$value )
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Choose a Model</label>
                            <select name="type_id" id="type" class="form-control" required>
                                <option value="" disabled selected>Select a Model</option>
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                                <label>Choose a Insulation</label>
                                <select name="ins_id" id="type" class="form-control" >
                                    @foreach($insulation as $key=>$value)
                                        <option value="">No Insulation</option>
                                        <option value="{{$value->id}}">{{ $value->name}}</option>
                                    @endforeach

                                </select>
                            </div>



                            <div class="form-group col-md-6">
                                <label>Width (m)</label>
                                <input type="text" name="width" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Length (m)</label>
                                <input type="text" name="length" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Price (€)</label>
                                <input type="text" name="price" step="0.01" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Price m<sup>2</sup> /€</label>
                                <input type="text" name="price_m2" step="0.01" class="form-control">
                            </div>


                            <div class="form-group col-md-6">
                                <label>Door (m) </label>
                                <input type="text" name="door" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Step Height </label>
                                <input type="text" name="steep_height" step="0.01" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Height middle area </label>
                                <input type="text" name="height_middle" step="0.01" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Square Meters m<sup>2</sup></label>
                                <input type="text" name="square_meters" step="0.01" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Foot Height (m)</label>
                                <input type="text" name="foot_height" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Foot Count</label>
                                <input type="text" name="foot_count" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Diameter</label>
                                <input type="text" name="diameter" class="form-control">
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card">
                                    <div class="card-header d-flex p-0">
                                        <h3 class="card-title p-3">Translate</h3>
                                        <ul class="nav nav-pills ml-auto p-2">

                                            @foreach($langs as $key=>$value)
                                            <li class="nav-item"><a class="nav-link @if($key == "de")active @endif" href="#{{$key}}"
                                                                    data-toggle="tab">{{$value}}</a></li>
                                            @endforeach

                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">

                                            @foreach($langs as $key=>$value)

                                            <div class="tab-pane @if($key == "de")active @endif" id="{{$key}}">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label>Product Description ({{$value}})</label>
                                                        <textarea id="summernote_{{$key}}"  name="description[{{$key}}]"
                                                       ></textarea>

                                                    </div>
                                                </div>


                                            </div>

                                            @endforeach





                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- ./card -->
                            </div>
                            <!-- /.col -->
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Kaydet</button>
                    </div>
                </form>
            </div>

            <!-- /.card -->

        </div>
    </div>


    @push('scripts')

<script>
    $(function () {
        // Summernote
        @foreach($langs as $key=>$lang)
                $("#summernote_{{{$key}}}").summernote({
            height:300
        })
        @endforeach

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });


        $('#category').on('change',function (e) {
            var cat_id=e.target.value;
            var locale = '{{ config('app.locale') }}';
            $.ajax({

                type: 'POST',
                url: '{{ route('admin.category.getsubcat',app()->getLocale())}}',

                data: {cat_id: cat_id},
                dataType: 'json',

                success: function (result) {

                    $('#type').empty();
                    $.each(result,function (index,subcat) {

                        // console.log(locale)
                        // console.log(subcat.name[locale])

                        $('#type').append('<option value="'+subcat.id+'">'+subcat.name[locale]+'</option>')
                    });


                }

            });

        })

    })
</script>
    @endpush
</x-admin-app>

