<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <a href="{{route('admin.category.create')}}" class="btn btn-primary active" style="float: right !important;">Add New
                        Category</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Category Image</th>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $key=>$value)
                        <tr>

                            <td><img src="{{asset("storage/images/cat_images/$value->image")}}" height="60px" width="60px"></td>
                            <td>{{$value->name}}</td>

                            <td><a href="{{route('admin.category.edit',$value)}}"><span class="badge bg-warning p-2">Edit</span></a></td>
                            <td><a href="{{route('admin.category.destroy',$value)}}" onclick="return confirm('If you delete this record you gonna  Are you sure you want to delete this record?')"><span class="badge bg-danger p-2">Delete</span></a></td>

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

