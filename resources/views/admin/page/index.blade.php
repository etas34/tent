<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pages</h3>
                    <a href="{{route('admin.page.create', app()->getLocale())}}" class="btn btn-primary active" style="float: right !important;">Add New
                        page</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example" class="table table-striped">
                        <thead>
                        <tr>
{{--                            <th>Product Image</th>--}}
                            <th>Header</th>
                            <th>Menu Visibility</th>
                            <th>Go To Page</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($page as $key=>$value)
                        <tr>
{{--                            <td><img src="{{asset("storage/images/prds_images/$value->image")}}" height="100px" width="100px"></td>--}}
                            <td>{{$value->header}}</td>
                            <td>{{$value->visibility == 1 ? 'Yes' : 'No' }}</td>
                            <td><a target="_blank" href="{{route('page',[App::getLocale(),$value->id])}}"><span   class="badge badge-primary" >Page ID: {{$value->id}}</span></a></td>

                            <td><a href="{{route('admin.page.edit',[app()->getLocale(), $value])}}"><span class="badge bg-warning p-2">Edit</span></a></td>
                            <td><a href="{{route('admin.page.destroy',[app()->getLocale(), $value])}}" onclick="return confirm('Are you sure you want to delete this record?')"><span class="badge bg-danger p-2">Delete</span></a></td>

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
        <script>
            $(function () {
                $('#example').DataTable({
                    "responsive":true,"lengthChange":false, "autoWidth":false,
                    "buttons":["copy","csv","excel","print","colvis"]
                }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)')
            })
        </script>

    @endpush
</x-admin-app>

