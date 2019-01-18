<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">{{$category['name']}}</h3>
        <a href="{{ route('room::create', ['categoryId' => $category['id'] ]) }}">
            <button type="button" class="btn btn-box-tool"><i class="fa fa-plus"></i> Новый</button>
        </a>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Статус</th>
                <th>Последнее изменение</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($rooms as $room)
                @if($category['id'] == $room['category_id'])
                    <tr>
                        <td>{{$room['id']}}</td>
                        <td>{{$room['name']}}</td>
                        <td>
                            @if($room['status'])
                                <span class="label label-success">Отображается</span>
                            @else
                                <span class="label label-danger">Скрыто</span>
                            @endif
                        </td>
                        <td>{{$room['updated_at']}}</td>
                        <td>
                            <a href="{{route('room::edit', ['id' => $room['id']])}}" type="button"
                               class="btn btn-warning">Редактировать</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'delete', 'route' => ['room::destroy', $room['id']]]) !!}
                            {!! Form::submit('Удалить', [
                                'class' => 'btn btn-danger',
                                'onclick' => 'return confirm("Удалить категорию '.$room['name'].' ?")'
                                ]) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
