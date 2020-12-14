<x-admin-app>
@push('styles')


@endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.model.update',$type)}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">

                        <div class="form-group">
                            <label>Choose a Category</label>
                            <select name="cat_id" class="form-control">
                                @foreach(\App\Models\Category::where('status',1)->get() as $value )
                                <option @if($value->id == $type->category->id) selected @endif value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                      <div class="form-group">


                            <label for="mod_name">Model Name</label>
                            <input type="text" name="mod_name" value="{{$type->name}}"  class="form-control" id="mod_name" placeholder="Enter Category Name">
                        </div>



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


@endpush
</x-admin-app>

