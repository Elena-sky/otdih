<div class="box {{$class}}">
    <div class="box-header with-border">
        <h3 class="box-title">{{$title}}</h3>
    </div>
    {{ Form::open(array('url' => $route, 'method' => 'post')) }}
    <div class="box-body">
        <input name="_token" id="_token" type="hidden" value="{{ csrf_token() }}">

        <div class="form-group">
            {!! Form::label('name', 'Название') !!}
            {!! Form::text('name', $category['name'], ['class' => 'form-control']) !!}
        </div>
        <label>
            <label>Отображать на сайте
                <input type="checkbox" name="status" value="1" @if($category['status']) checked @endif>
            </label>
        </label>
    </div>
    <div class="box-footer">
        {{ Form::button($btnName, ['class' => 'btn btn-success', 'type' => 'submit']) }}
    </div>
    {{ Form::close() }}
</div>
