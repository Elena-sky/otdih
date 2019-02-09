@extends('admin.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Номера/Домики</h1>
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
                   'title' => 'Создать номер',
                   'room' => [
                        'name' => '',
                        'title' => '',
                        'sub_title' => '',
                        'floor' => '',
                        'column_one' => '',
                        'column_two' => '',
                        'description' => '',
                        'status' => '1',
                        'category_id' => ''
                        ],
                   'categories' => $categories,
                   'example' => $example,
                   'exampleTxt' => $exampleTxt,
                   'route' => route('room::store'),
                   'btnName'=> 'Создать',
                   'categoryId' => $categoryId
                ])
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
@endsection
