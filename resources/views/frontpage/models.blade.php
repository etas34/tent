
<div class="custom-select-form">
    <select class="wide add_bottom_15 filter-item" id="modelselectbox">
        <option value="0" selected>All</option>
        @foreach($model as $key=>$value)
            <option value="{{$value->id}}" @if(isset($model_id) && $model_id==$value->id) selected @endif>{{$value->name}}</option>
        @endforeach
    </select>
</div>

