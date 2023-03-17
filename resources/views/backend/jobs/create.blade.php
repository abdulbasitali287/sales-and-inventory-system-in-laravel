@extends('backend.layouts.main')
@section('main-content')
<div class="container py-4">
    <h4 class="display-4 fw-bold fs-2">{{ $title }}</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open([
                'url' => $url
            ]) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label("Job-Title", "Title") !!}
                @if ($errors->isEmpty())
                {!! Form::text("job_title", $data->job_title , ['class' => 'form-control']) !!}
                @else
                {!! Form::text("job_title", "" , ['class' => 'form-control']) !!}
                <span class="text-danger">
                    @error('job_title')
                        {{ $message }}
                    @enderror
                </span>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label("Job-Salary", "Salary") !!}
                @if ($errors->isEmpty())
                {!! Form::number("salary", $data->salary , ['class' => 'form-control']) !!}
                @else
                {!! Form::number("salary", "" , ['class' => 'form-control']) !!}
                <span class="text-danger">
                    @error('salary')
                        {{ $message }}
                    @enderror
                </span>
                @endif
            </div>
            {!! Form::submit("Submit", ['class' => 'btn btn-sm btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection
