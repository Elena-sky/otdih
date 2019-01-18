@extends('admin.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Номера/Домики</h1>
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
                @include('admin.rooms._form', [
                   'class' => 'box-success',
                   'title' => 'Редактировать номер',
                   'room' => $room,
                   'categories' => $categories,
                   'example' => $example,
                   'exampleTxt' => $exampleTxt,
                   'route' => route('room::update', $room['id']),
                   'btnName'=> 'Сохранить',
                   'categoryId' => isset($categoryId)?: ''
               ])
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
@endsection
