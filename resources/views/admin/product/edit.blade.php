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
                <form action="{{route('admin.product.update',$product)}}" method="post" autocomplete="off"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputFile">Product Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" accept="image/*"
                                               id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group col-md-6">
                                <label>Choose a Category</label>
                                <select name="category_id" id="category" class="form-control" required>
                                    <option value="" disabled selected>Select a Category</option>
                                    @foreach($categories as $key=>$value )
                                        <option value="{{$value->id}}"
                                                @if($product->category_id==$value->id) selected @endif>{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Choose a Model</label>
                                <select name="type_id" id="type" class="form-control" required>
                                    <option disabled value="">Choose a model</option>
                                    <option value="{{$product->type_id}}"
                                            selected>{{$type->find($product->type_id)['name']}}</option>

                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Choose a Insulation</label>
                                <select name="ins_id" id="type" class="form-control">
                                    <option value="">No Insulation</option>
                                @foreach($insulation as $key=>$value)
                                        <option @if($product->insulation and $product->insulation->id == $value->id ) selected
                                                @endif value="{{$value->id}}">{{ $value->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

                        <div class="row">


                            <div class="form-group col-md-6">
                                <label>Width (m)</label>
                                <input type="text" name="width" value="{{$product->width}}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Length (m)</label>
                                <input type="text" name="length" value="{{$product->length}}" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Price (€)</label>
                                <input type="text" name="price" value="{{$product->price}}" step="0.01"
                                       class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Price m<sup>2</sup> /€</label>
                                <input type="text" name="price_m2" value="{{$product->price_m2}}" step="0.01"
                                       class="form-control">
                            </div>


                            <div class="form-group col-md-6">
                                <label>Door (m) </label>
                                <input type="text" name="door" value="{{$product->door}}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Step Height </label>
                                <input type="text" name="steep_height" value="{{$product->steep_height}}" step="0.01"
                                       class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Height middle area </label>
                                <input type="text" name="height_middle" value="{{$product->height_middle}}"
                                       step="0.01" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Square Meters m<sup>2</sup></label>
                                <input type="text" name="square_meters" value="{{$product->square_meters}}"
                                       step="0.01" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Foot Height (m)</label>
                                <input type="text" name="foot_height" value="{{$product->foot_height}}"
                                       class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Foot Count</label>
                                <input type="text" name="foot_count" value="{{$product->foot_count}}"
                                       class="form-control">
                            </div>


                        </div>
                        @if($product->image)
                            <div class="form-group">
                                <label for="file">Selected Image:</label>
                                <div id="file"><img src="{{asset("storage/images/prds_images/$product->image")}}"
                                                    width="300" alt="..."></div>
                            </div>
                        @endif


                        <div class="row">
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card">
                                    <div class="card-header d-flex p-0">
                                        <h3 class="card-title p-3">Translate</h3>
                                        <ul class="nav nav-pills ml-auto p-2">

                                            @foreach($langs as $key=>$value)
                                                <li class="nav-item"><a class="nav-link @if($key == "de")active @endif"
                                                                        href="#{{$key}}"
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
                                                            <textarea id="summernote_{{$key}}"
                                                                      name="description[{{$key}}]"
                                                            >



                                                                @if (array_key_exists($key,$product->getTranslations('description'))) {{$product->getTranslations('description')[$key]}} @endif
                                                            </textarea>

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
                    height: 300
                })
                @endforeach

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

                });


                $('#category').on('change', function (e) {
                    var cat_id = e.target.value;
                    var locale = '{{ config('app.locale') }}';
                    $.ajax({

                        type: 'POST',
                        url: '{{ route('admin.category.getsubcat')}}',

                        data: {cat_id: cat_id},
                        dataType: 'json',

                        success: function (result) {

                            $('#type').empty();
                            $.each(result, function (index, subcat) {

                                // console.log(subcat.id )
                                // console.log(subcat.name[locale])

                                $('#type').append('<option value="' + subcat.id + '">' + subcat.name[locale] + '</option>')
                            });


                        }

                    });

                })

            })
        </script>
    @endpush
</x-admin-app>

