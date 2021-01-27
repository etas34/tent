<x-admin-app>
    @push('styles')


    @endpush

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.page.update',[app()->getLocale(),$page])}}" method="post" autocomplete="off"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card">
                    <div class="card-body">
                <div class="row">
                    <div class="col-md-12 form-group">

                        <div class="card ">
                            <div class="card-header ">
                                <h3 class="card-title">Menu Visibility</h3>
                            </div>
                            <div class="card-body">
                                <input type="checkbox" @if($page->visibility == 1) checked @endif name="visibility" data-bootstrap-switch data-off-color="danger" data-on-color="success">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                        <!-- Custom Tabs -->
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3">Create A Page</h3>
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
                                                    <label>Header ({{$value}})</label>
                                                    <input value="{{$page->getTranslations('header')[$key] ?? ''}}" type="text" name="header[{{$key}}]" class="form-control">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Page Description ({{$value}})</label>
                                                    <textarea id="summernote_{{$key}}"  name="description[{{$key}}]"
                                                    > {{$page->getTranslations('content')[$key] ?? ''}}</textarea>

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
                    </div>
                    </div>
                    <!-- /.col -->
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

