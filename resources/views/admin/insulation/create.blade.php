<x-admin-app>
@push('styles')


@endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create an insulation</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.insulation.store', app()->getLocale())}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">





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

                                                        <label for="mod_name">insulation Name ({{$value}})</label>
                                                        <input type="text" name="ins_name[{{$key}}]"  class="form-control" id="mod_name" placeholder="Enter insulation Name">
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
                        <button type="submit" class="btn btn-primary float-right">Kaydet</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
    </div>






@push('scripts')
        <script>

        </script>

@endpush
</x-admin-app>

