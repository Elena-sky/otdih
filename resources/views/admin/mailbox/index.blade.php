@extends('admin.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Почта</h1>
    </section>
    @include('admin.parts._message')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Входящие</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Месяц</th>
                                <th>Человек</th>
                                <th>Имя</th>
                                <th>Телефон</th>
                                <th>Email</th>
                                <th>Комментарий</th>
                                <th>Дата_отправки</th>
                            </tr>
                            @foreach($letters as $letter)
                                <tr>
                                    <td>
                                        {!! Form::open(['method' => 'delete', 'route' => ['mail::destroy', $letter['id']]]) !!}
                                        {{ Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-default btn-sm', 'type' => 'submit']) }}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>{{$letter['id']}}</td>
                                    <td>{{$letter['month']}}</td>
                                    <td>{{$letter['count']}}</td>
                                    <td>{{$letter['name']}}</td>
                                    <td>{{$letter['phone']}}</td>
                                    <td>{{$letter['email']}}</td>
                                    <td>{{$letter['comment']}}</td>
                                    <td>{{$letter['created_at']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection