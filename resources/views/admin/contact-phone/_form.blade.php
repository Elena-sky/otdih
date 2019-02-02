<!-- form start -->
{{ Form::open(array('url' => route('contact-phone::store'), 'method' => 'post', 'class' => 'orm-horizontal')) }}
<div class="box-body">
    <input name="_token" id="_token" type="hidden" value="{{ csrf_token() }}">
    <div class="form-group">
        {!! Form::label('phone', 'Телефон') !!}
        {!! Form::text('phone', '', ['class' => 'form-control', 'placeholder' => '+38(093)91 01 377']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telephone_call', 'Звонок') !!}
        {!! Form::text('telephone_call', '', ['class' => 'form-control', 'placeholder' => '+380939101377']) !!}
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="viber" value="1"><b>Viber</b>
        </label>
    </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
    {{ Form::button('Создать', ['class' => 'btn btn-info pull-right', 'type' => 'submit']) }}
</div>
<!-- /.box-footer -->
{{ Form::close() }}
