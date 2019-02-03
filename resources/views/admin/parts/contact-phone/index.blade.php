<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Контактные телефоны</h3>
    </div>
    <!-- /.box-header -->
    @include('admin.parts.contact-phone._table', ['phones' => $phones])
    <hr>
    @include('admin.parts.contact-phone._form')
</div>
