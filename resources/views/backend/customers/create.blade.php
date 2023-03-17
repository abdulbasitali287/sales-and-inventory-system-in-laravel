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
                {!! Form::label("sales", "Sales") !!}
                {!! Form::select("sale_id", ['0'=>'laptop'] , "" , ['class' => 'form-control p-4']) !!}
            </div>
            {!! Form::submit("Submit", ['class' => 'btn btn-sm btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection
