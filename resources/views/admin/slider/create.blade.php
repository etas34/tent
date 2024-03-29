<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create a Slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.slider.store', app()->getLocale())}}" method="post" autocomplete="off"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Rank Number </label>
                                    <select name="rank" class="form-control">
                                        <option>null</option>
                                    @for($i = 1; $i < \App\Models\Slider::count()+1 ; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>

                                </div>
                            </div>
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card">
                                    <div class="card-header d-flex p-0">
                                        <h3 class="card-title p-3">Translate</h3>
                                        <ul class="nav nav-pills ml-auto p-2">
                                            @foreach($langs as $key=>$value)
                                                <li class="nav-item"><a class="nav-link @if($key == 'de') active @endif"
                                                                        href="#{{$key}}"
                                                                        data-toggle="tab">{{$value}}</a></li>

                                            @endforeach

                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">

                                        <div class="tab-content">
                                            @foreach($langs as $key=>$value)
                                                <div class="tab-pane @if($key == 'de') active @endif" id="{{$key}}">


                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Slider Image ({{$value}})</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="image[{{$key}}]"
                                                                       accept="image/*" class="custom-file-input"
                                                                       id="exampleInputFile">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                                    Image (1450 X 750)</label>
                                                            </div>

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

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="url">Redirect Url</label>
                                    <input type="text" placeholder="/category/1" class="form-control" id="url" name="url">
                                </div>
                            </div>

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
    </div>


    @push('scripts')


    @endpush
</x-admin-app>

