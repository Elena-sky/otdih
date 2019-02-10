<style>

    #pr-update {
        max-height: 250px !important;
        padding: 4px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .close {
        position: absolute;
        opacity: 20;
        z-index: 5;
        -webkit-transition: opacity 150ms;
        text-align: right;
        border: 0;
        cursor: pointer;
    }

    .contentImg {
        position: relative;
        float: left;
    }

    .contentImg:after {
        contentImg: '\A';
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
    }

</style>

<div class="box {{$class}}">
    <div class="box-header with-border">
        <h3 class="box-title">{{$title}}</h3>
    </div>
    {{ Form::open(array('url' => $route, 'method' => 'post', 'files' => true)) }}
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
        <div class="box-body pad">
        <textarea id="editor1" name="description" rows="10" cols="80"
                  style="visibility: hidden; display: none;">{{$room['description']}}</textarea>
        </div>
        <div class="form-group ">
            {!! Form::label('currentImage', 'Текущие изобращения') !!}
            <div class="col-sm-12">
                <div class="row">
                    @if(isset($room->images) && count($room->images) > 0)
                        @foreach($room->images as $image )
                            <div class="contentImg clossable" id="Image{{$image->id}}">
                                <div class="close" data-img-id="{{$image->id}}" data-token="{{ csrf_token() }}"
                                     data-url="{{ route('room::destroyImg') }}"><i class="fa fa-trash"></i></div>
                                <img id="pr-update" src="{{ asset( config('app.imgPath.rooms') . $image->image_name) }}"
                                     alt="{{$image->id}}">
                            </div>
                        @endforeach
                    @else
                        <div class="col-sm-4"><p>Нет фотографий</p></div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('productImage', 'Новое изображение:') !!}
            <div class="col-sm-12">
                {!! Form::file('images[]', ['multiple' => true])!!}
            </div>
        </div>
    </div>
    <div class="box-footer">
        {{ Form::button($btnName, ['class' => 'btn btn-success', 'type' => 'submit']) }}
    </div>
    {{ Form::close() }}
</div>
