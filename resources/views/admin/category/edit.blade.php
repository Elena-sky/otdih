@extends('admin.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Категории</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-xs-12">
                @include('admin.category._form', [
                'class' => 'box-warning',
                'title' => 'Редактировать категорию',
                'category' => $category,
                'route' => route('category::update', ['id' => $category['id']]),
                'btnName'=> 'Сохранить'
                ])
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
@endsection
