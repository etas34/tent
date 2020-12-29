
@foreach($length as $key=>$value)
    <li>
        <label class="container_check">{{$value->length}} m
            <input type="checkbox" class="cb_length" @if(isset($length_id)) checked @endif value="{{$value->length}}">
            <span class="checkmark"></span>
        </label>
    </li>
@endforeach
