<div class="box {{$class}}">
    <div class="box-header with-border">
        <h3 class="box-title">{{$title}}</h3>
    </div>
    {{ Form::open(array('url' => $route, 'method' => 'post')) }}
    <div class="box-body">
        <input name="_token" id="_token" type="hidden" value="{{ csrf_token() }}">
        <div class="form-group">
            {!! Form::label('name', 'Название') !!}
            {!! Form::text('name', $room['name'], ['class' => 'form-control', 'placeholder' => '\'Стандарт\' или \'Розовый\'']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title', 'Заголовок') !!}
            {!! Form::text('title', $room['title'], ['class' => 'form-control', 'placeholder' => '1-комнатный розовый домик']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sub_title', 'Подзаголовок') !!}
            {!! Form::text('sub_title', $room['sub_title'], ['class' => 'form-control', 'placeholder' => '\'вмещает 2-4 человек\' или \'2х-местный, 3х-местный, 4х-местный\'']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('floor', 'Этаж') !!}
            {!! Form::text('floor', $room['floor'], ['class' => 'form-control', 'placeholder' => 'Этаж - 1']) !!}
        </div>
        <div class="form-group" data-toggle="tooltip" title="{{$exampleTxt}}">
            {!! Form::label('column_one', '1 колонка') !!}
            {!! Form::text('column_one', $room['column_one'], ['class' => 'form-control', 'placeholder' => $exampleTxt]) !!}
        </div>
        <div class="form-group" data-toggle="tooltip" title="{{$exampleTxt}}">
            {!! Form::label('column_two', '2 колонка') !!}
            {!! Form::text('column_two', $room['column_two'], ['class' => 'form-control', 'placeholder' => $exampleTxt]) !!}
        </div>
        <div class="form-group">
            <label>Категория</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value={{$category['id']}} @if($category['id'] == $room['category_id'] || $category['id'] == $categoryId ) selected @endif>{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Отображать на сайте
                <input type="checkbox" name="status" value="1" @if($room['status']) checked @endif>
            </label>
        </div>
    </div>
    <div class="box-body pad">
        <textarea id="editor1" name="description" rows="10" cols="80"
                  style="visibility: hidden; display: none;">{{$room['description']}}</textarea>
    </div>
    <div class="box-footer">
        {{ Form::button($btnName, ['class' => 'btn btn-success', 'type' => 'submit']) }}
    </div>
    {{ Form::close() }}
</div>
