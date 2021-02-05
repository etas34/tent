
@foreach($diameter as $key=>$value)
    <div class="col-md-6">
        <label class="container_check">{{$value->diameter}} m
            <input type="checkbox" class="cb_diameter" @if(isset($diameter_id)) checked @endif value="{{$value->diameter}}">
            <span class="checkmark"></span>
        </label>
    </div>
@endforeach
