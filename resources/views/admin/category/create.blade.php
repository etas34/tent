<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create a Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.category.store', app()->getLocale())}}" method="post" autocomplete="off"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">


                        <div class="form-group">
                            <label for="exampleInputFile">Category Image (600 X 400)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" required accept="image/*" class="custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rank">Homepage rank place</label>
                            <div class="input-group">

                                <select class="form-control" name="sira">
                                    @for($i = 1 ; $i <= \App\Models\Category::count() ; $i++ )
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                            </div>

                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">Banner Image (1350 X 500)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="banner" accept="image/*" class="custom-file-input" id="exampleInputFile">
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

                                                        <label for="cat_name">Category Name ({{$value}})</label>
                                                        <input type="text" name="cat_name[{{$key}}]"
                                                               class="form-control" id="cat_name"
                                                               placeholder="Enter Category Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category Description ({{$value}})</label>
                                                        <textarea class="summernote" id="summernote_{{$key}}"  name="description[{{$key}}]">



                                                        </textarea>

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
            <script>
                $(() => {
                    $('.summernote').summernote({
                        height:300
                    })
                })
            </script>

    @endpush
</x-admin-app>

