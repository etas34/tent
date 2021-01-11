
@foreach($length as $key=>$value)
    <div class="col-md-6">
        <label class="container_check">{{$value->length}} m
            <input type="checkbox" class="cb_length" @if(isset($length_id)) checked @endif value="{{$value->length}}">
            <span class="checkmark"></span>
        </label>
    </div>
@endforeach
