<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products</h3>
                    <a href="{{route('admin.product.create', app()->getLocale())}}" class="btn btn-primary active" style="float: right !important;">Add New
                        product</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example" class="table table-striped">
                        <thead>
                        <tr>
{{--                            <th>Product Image</th>--}}
                            <th>Product Category</th>
                            <th>Product Model</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $key=>$value)
                        <tr>

{{--                            <td><img src="{{asset("storage/images/prds_images/$value->image")}}" height="100px" width="100px"></td>--}}
                            <td>{{$value->category->name}}</td>
                            <td>{{$value->type->name}}</td>

                            <td><a href="{{route('admin.product.edit',$value)}}"><span class="badge bg-warning p-2">Edit</span></a></td>
                            <td><a href="{{route('admin.product.destroy',$value)}}" onclick="return confirm('Are you sure you want to delete this record?')"><span class="badge bg-danger p-2">Delete</span></a></td>

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

