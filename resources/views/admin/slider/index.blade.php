<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <a href="{{route('admin.slider.create', app()->getLocale())}}" class="btn btn-primary active" style="float: right !important;">Add New
                        Slider</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Slider Image</th>
                            <th>Header</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($slider as $key=>$value)
                        <tr>

                            <td><img src="{{asset("storage/images/slider_images/$value->image")}}" height="60px" width="60px"></td>
                            <td>{{$value->header}}</td>
                            <td>{{$value->description}}</td>

                            <td><a href="{{route('admin.slider.edit',$value)}}"><span class="badge bg-warning p-2">Edit</span></a></td>
                            <td><a href="{{route('admin.slider.destroy',$value)}}" onclick="return confirm('If you delete this record you gonna  Are you sure you want to delete this record?')"><span class="badge bg-danger p-2">Delete</span></a></td>

                        </tr>
                        @endforeach


                        </tbody>
                        {{--                        <tfoot>--}}
                        {{--                        <tr>--}}
                        {{--                            <th>Rendering engine</th>--}}
                        {{--                            <th>Browser</th>--}}
                        {{--                            <th>Platform(s)</th>--}}
                        {{--                            <th>Engine version</th>--}}
                        {{--                            <th>CSS grade</th>--}}
                        {{--                        </tr>--}}
                        {{--                        </tfoot>--}}
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>


    @push('scripts')


    @endpush
</x-admin-app>

