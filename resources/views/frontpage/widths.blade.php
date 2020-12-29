
@foreach($width as $key=>$value)
    <li>
        <label class="container_check">{{$value->width}} m
            <input type="checkbox" class="cb_width" @if(isset($width_id)) checked @endif value="{{$value->width}}">
            <span class="checkmark"></span>
        </label>
    </li>
@endforeach
