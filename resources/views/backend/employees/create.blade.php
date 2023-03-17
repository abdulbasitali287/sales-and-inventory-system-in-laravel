@extends('backend.layouts.main')
@section('main-content')
<div class="container py-4">
    <h4 class="display-4 fw-bold fs-2">Insert Reccord</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            {!! Form::open([

            ]) !!}
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("first-name", "First Name") !!}
                        {!! Form::text("fname", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("last-name", "Last Name") !!}
                        {!! Form::text("lname", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("email", "Email") !!}
                        {!! Form::email('email', "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("phone number", "Phone Number") !!}
                        {!! Form::number("phone_number", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("address", "Address") !!}
                        {!! Form::textarea("address", "", ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("image", "Image") !!}
                        {!! Form::file("image", ['class' => 'form-control p-3']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label("job", "Job") !!}
                        {!! Form::select("job", ['0' => 'one'], "", ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            {!! Form::submit("Submit", ['class' => 'btn btn-sm btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection
