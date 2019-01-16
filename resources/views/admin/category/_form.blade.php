<div class="box {{$class}}">
    <div class="box-header with-border">
        <h3 class="box-title">{{$title}}</h3>
    </div>

    {{ Form::open(array('url' => $route, 'method' => 'post')) }}
    <div class="box-body">
        <input name="_token" id="_token" type="hidden" value="{{ csrf_token() }}">
        <label>Название</label>
        <input class="form-control" type="text" name="name" value="{{$category['name']}}">

        <label>
            <input type="checkbox" name="status" value="1" @if($category['status']) checked @endif>
            Отображать на сайте
        </label>
    </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-success">{{$btnName}}</button>
    </div>
    {{ Form::close() }}
</div>
