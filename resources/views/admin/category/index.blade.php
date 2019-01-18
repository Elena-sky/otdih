@extends('admin.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Категории</h1>
        @include('admin.parts._breadcrumb')
    </section>
    @include('admin.parts._message')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-xs-12">
                @include('admin.category._form', [
                'class' => 'box-success',
                'title' => 'Создать категорию',
                'category' => [
                    'name' => '',
                    'status' => '1'
                    ],
                'route' => route('category::store'),
                'btnName'=> 'Создать'
                ])
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список категорий</h3>
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
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category['id']}}</td>
                                    <td>{{$category['name']}}</td>
                                    <td>
                                        @if($category['status'])
                                            <span class="label label-success">Отображается</span>
                                        @else
                                            <span class="label label-danger">Скрыто</span>
                                        @endif
                                    </td>
                                    <td>{{$category['updated_at']}}</td>
                                    <td>
                                        <a href="{{route('category::edit', ['id' => $category['id']])}}" type="button"
                                           class="btn btn-warning">Редактировать</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['method' => 'delete', 'route' => ['category::destroy', $category['id']]]) !!}
                                        {!! Form::submit('Удалить', [
                                            'class' => 'btn btn-danger',
                                            'onclick' => 'return confirm("Удалить категорию '.$category['name'].' ?")'
                                            ]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
@endsection
