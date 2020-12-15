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
                <form action="{{route('admin.category.store')}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">









                            <div class="row">
                                <div class="col-12">
                                    <!-- Custom Tabs -->
                                    <div class="card">
                                        <div class="card-header d-flex p-0">
                                            <h3 class="card-title p-3">Tabs</h3>
                                            <ul class="nav nav-pills ml-auto p-2">
                                                <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>


                                            </ul>
                                        </div><!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1">

                                                </div>
                                            </div>
                                            <!-- /.tab-content -->
                                        </div><!-- /.card-body -->
                                    </div>
                                    <!-- ./card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->


                        <div class="form-group">

                            <label for="cat_name">Category Name</label>
                            <input type="text" name="cat_name"  class="form-control" id="cat_name" placeholder="Enter Category Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Category Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>

                            </div>
                        </div>


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

