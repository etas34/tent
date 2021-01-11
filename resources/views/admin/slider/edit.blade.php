<x-admin-app>
@push('styles')


@endpush

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.slider.update',[app()->getLocale(),$slider])}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            @if($slider->image)
                                <div class="form-group">
                                    <label for="file">Selected Image:</label>
                                   <div id="file"> <img src="{{asset("storage/images/slider_images/$slider->image")}}" width="300"  alt="..."></div>
                                </div>
                            @endif






                                <div class="form-group">
                                    <label for="exampleInputFile">Slider Image (1450 X 750)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" accept="image/*" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

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
                                                        <li class="nav-item"><a class="nav-link @if($key == 'de') active @endif" href="#{{$key}}" data-toggle="tab">{{$value}}</a></li>

                                                    @endforeach

                                                </ul>
                                            </div><!-- /.card-header -->
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    @foreach($langs as $key=>$value)
                                                        <div class="tab-pane @if($key == 'de') active @endif" id="{{$key}}">
                                                            <div class="form-group">

                                                                <label for="header">Header ({{$value}})</label>
                                                                <input type="text" name="header[{{$key}}]"  value="@if (array_key_exists($key,$slider->getTranslations('header'))) {{$slider->getTranslations('header')[$key]}} @endif" class="form-control" id="header" placeholder="Enter Header">
                                                            </div>
                                                            <div class="form-group">

                                                                <label for="description">Description ({{$value}})</label>
                                                                <input type="text" name="description[{{$key}}]"  value="@if (array_key_exists($key,$slider->getTranslations('description'))) {{$slider->getTranslations('description')[$key]}} @endif" class="form-control" id="description" placeholder="Enter Description">
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
                                <!-- /.row -->




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


@endpush
</x-admin-app>

