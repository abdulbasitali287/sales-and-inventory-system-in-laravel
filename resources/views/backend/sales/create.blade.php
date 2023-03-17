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
            {!! Form::token() !!}
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("date_of_transaction", "date_of_transaction") !!}
                        {!! Form::date("date_of_transaction", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("Product Name", "Product Name") !!}
                        {!! Form::select("prduct_name", ['0' => 'from products table'], "" , ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("qty_of_purchased", "Quantity Purchased") !!}
                        {!! Form::number("qty_of_purchased", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("total amount", "Total") !!}
                        {!! Form::number("total_amount", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("change_of_customer", "Change of Customer") !!}
                        {!! Form::number("customer_change", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("Product Name", "Product Name") !!}
                        {!! Form::select("prduct_name", ['0' => 'from products table'], "" , ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("Employee", "Employee") !!}
                        {!! Form::select("employee", ['0' => 'one'], "", ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            {!! Form::submit("Submit", ['class' => 'btn btn-sm btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
