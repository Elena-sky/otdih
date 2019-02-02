<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
        <tbody>
        <tr>
            <th></th>
            <th>Телефон</th>
            <th>Звонок</th>
            <th></th>
        </tr>
        @isset($phones)
            @foreach($phones as $phone)
                <tr>
                    <td>@if($phone['viber'])<i class="fa fa-phone" style="color: #675ca8;"> Viber</i>@endif</td>
                    <td>{{$phone['phone']}}</td>
                    <td>{{$phone['telephone_call']}}</td>
                    <td>
                        {!! Form::open(['method' => 'delete', 'route' => ['contact-phone::destroy', $phone['id']]]) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', [
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-sm',
                        'onclick' => 'return confirm("Удалить телефон '.$phone['name'].' ?")'
                        ] )  }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endisset
        </tbody>
    </table>
</div>
<!-- /.box-body -->
