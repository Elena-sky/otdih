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
                @foreach($categories as $category)
                    @include('admin.rooms._table', [
                   'class' => 'box-success',
                   'title' => 'Создать номер',
                   'categories' => $categories,
                   'rooms' => $rooms
                   ])
                @endforeach
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
@endsection
