<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                    <a href="{{route('admin.insulation.create')}}" class="btn btn-primary active" style="float: right !important;">Add New
                        insulation</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Insulations</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($insulation as $key=>$value)
                        <tr>

                           <td>{{$value->name}}</td>

                            <td><a href="{{route('admin.insulation.edit',$value)}}"><span class="badge bg-warning p-2">Edit</span></a></td>
                            <td><a href="{{route('admin.insulation.destroy',$value)}}" onclick="return confirm('Are you sure you want to delete this record?')"><span class="badge bg-danger p-2">Delete</span></a></td>

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

