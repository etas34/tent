<x-admin-app>
    @push('styles')


    @endpush


    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create a Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.product.store')}}" method="post" autocomplete="off"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Choose a Category</label>
                            <select name="category_id" class="form-control">
                                @foreach(\App\Models\Category::where('status',1)->get() as $value )
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Choose a Model</label>
                            <select name="type_id" class="form-control">
                                @foreach(\App\Models\Type::where('status',1)->get() as $value )
                                    <option value="{{$value->id}}">{{$value->category->name}}>>{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">


                            <div class="form-group col-md-6">
                                <label>Width (m)</label>
                                <input type="number" name="width" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Length (m)</label>
                                <input type="number" name="length" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Price (€)</label>
                                <input type="number" name="price" step="0.01" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Price m<sup>2</sup> /€</label>
                                <input type="number" name="price_m2" step="0.01" class="form-control">
                            </div>


                            <div class="form-group col-md-6">
                                <label>Insulation </label>
                                <input type="text" name="insulation" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Door (m) </label>
                                <input type="number" name="door" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Step Height </label>
                                <input type="number" name="steep_height" step="0.01" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Height middle area </label>
                                <input type="number" name="height_middle" step="0.01" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Square Meters m<sup>2</sup></label>
                                <input type="number" name="square_meters" step="0.01" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Foot Height (m)</label>
                                <input type="number" name="foot_height" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Foot Count</label>
                                <input type="number" name="foot_count" class="form-control">
                            </div>


                            <div class="form-group col-md-12">
                                <label>Product Description</label>
                                <textarea rows="5" name="description" class="form-control"></textarea>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product Image</label>
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

