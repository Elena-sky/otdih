@extends('template')

@section('content')

    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->

            <!-- Menu -->
        @include('parts.navigation', [
          'categories' => $options['categories'],
          'rooms' => $options['rooms']
        ])
        <!-- End menu -->

            <!-- Reservation -->
            <div class="content three_quarter">

                <!-- Description -->
                <div class="col-sm-12 row">

                    <div class="content">
                        <div class="reservation">
                            <h6 class="norm">Написать нам</h6>
                            <p>Воспользовавшись формой ниже, Вы можете задать интересующий Вас вопрос. </p>
                            <p>Укажите следующую информацию:</p>

                        </div>



                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif


                        <div id="comments">


                            {!! Form::open(array('route' => array('mailSend'))) !!}
                            {{--{{ csrf_field() }}--}}

                            <div class="col-sm-6">
                                <div>
                                    {!! Form::label('name', 'Имя: *') !!}
                                    {!! Form::text('name', '', ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                                <div>
                                    {!! Form::label('email', 'Email: *') !!}
                                    {!! Form::text('email', '', ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                                <div>
                                    {!! Form::label('phone', 'Телефон: *') !!}
                                    {!! Form::text('phone', '', ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>

                                <div>
                                    <div class="col-sm-6">
                                        {!! Form::label('count', 'Человек: *') !!}
                                        {!! Form::text('count', '', ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::label('month', 'Месяц отдыха:') !!}
                                        {!! Form::text('month', '', ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="">
                                    {!! Form::label('comment', 'Ваше сообщение') !!}
                                    {!! Form::textarea('comment', '', ['placeholder' => 'Напшите что Вас инетерсует...','class' => 'form-control', 'maxlength' => '256', 'required' => 'required']) !!}
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
                                <br>

                                {{ Form::button('<i class="fa fa-envelope-o"></i> Отправить', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
                            </div>
                        </div>
                        <!-- /.row -->
                        {!! Form::close() !!}



                        </div>
                    </div>

                </div>
                <!-- End reservation -->

            </div>
            <!-- End room -->

        </main>
        <!-- / main body -->

    </div>


@endsection

