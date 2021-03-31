
<div class="custom-select-form">
    <select class="wide add_bottom_15 filter-item" id="insulationselectbox">
        <option value="0" selected>All</option>

        @foreach($insulation as $key=>$value)
            <option value="{{$value->id}}" @if(isset($insulation_id) && $insulation_id==$value->id) selected @endif>{{$value->name}}</option>
        @endforeach
    </select>
</div>

