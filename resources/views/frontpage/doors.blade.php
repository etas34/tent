
@foreach($door as $key=>$value)
    <div class="col-md-6">
        <label class="container_check">{{$value->door}} m
            <input type="checkbox" class="cb_door" @if(isset($door_id)) checked @endif value="{{$value->door}}">
            <span class="checkmark"></span>
        </label>
    </div>
@endforeach
