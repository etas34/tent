
<div class="custom-select-form">
    <select class="wide add_bottom_15 filter-item" id="modelselectbox">
        <option value="0" selected>All</option>
        @if(isset($secili_model))
            <option value="{{$secili_model->id}}" selected>{{$secili_model->name}}</option>
        @else
        @foreach($model as $key=>$value)
            <option value="{{$value->id}}" @if(isset($model_id) && $model_id==$value->id) selected @endif>{{$value->name}}</option>
        @endforeach
            @endif
    </select>
</div>

