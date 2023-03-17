@extends('backend.layouts.main')
@section('main-content')
<div class="container py-4">
    <h4 class="display-4 fw-bold fs-2">Insert Reccord</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open() !!}

            <div class="form-group">
                {!! Form::label("username", "Username") !!}
                {!! Form::text("username", "", ['class' => 'form-control p-3']) !!}
            </div>
            <div class="form-group">
                {!! Form::label("password", "Password") !!}
                {!! Form::password("password", ['class' => 'form-control p-3']) !!}
            </div>
            {!! Form::submit("Submit", ['class' => 'btn btn-sm btn-success p-3']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection
