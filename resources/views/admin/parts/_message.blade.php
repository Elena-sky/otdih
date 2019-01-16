<div class="col-xs-12">
    @if (session('status'))
        <div class="alert alert-success">
            <i class="icon fa fa-check"></i> {{ session('status') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <i class="icon fa fa-ban"></i> Error
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>