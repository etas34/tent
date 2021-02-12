<x-admin-app>
@push('styles')


@endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Model</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.model.update',[app()->getLocale(),$type])}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">

                        <div class="form-group">
                            <label>Choose a Category</label>
                            <select name="cat_id" class="form-control">
                                @foreach($category as $value )
                                <option @if($value->id == $type->category->id) selected @endif value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                      <div class="form-group">

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

                                                          <label for="mod_name">Model Name ({{$value}})</label>
                                                          <input type="text" name="mod_name[{{$key}}]" value="@if (array_key_exists($key,$type->getTranslations('name'))) {{$type->getTranslations('name')[$key]}} @endif"  class="form-control" id="mod_name" placeholder="Enter Category Name">
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

