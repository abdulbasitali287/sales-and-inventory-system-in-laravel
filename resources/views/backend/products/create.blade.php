@extends('backend.layouts.main')
@section('main-content')
<div class="container py-4">
    <h4 class="display-4 fw-bold fs-2">Insert Reccord</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            {!! Form::open([
                'enctype' => 'multipart/form-data'
            ]) !!}
            {!! Form::token() !!}
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("prduct-name", "Product Name") !!}
                        {!! Form::text("product_name", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("product-desc", "Description") !!}
                        {!! Form::text("description", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("Quantity Stock", "Quantity Stock") !!}
                        {!! Form::number("qty_stock", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("Price", "Price") !!}
                        {!! Form::number("price", "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("onhand", "On Hand") !!}
                        {!! Form::select("onhand", ['0' => 'uncitve','1' => 'active'], "", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("date of supply", "Date of Supply") !!}
                        {!! Form::date("date_of_supply", "" , ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("supplier", "Supplier") !!}
                        {!! Form::select("supplier", ['0' => 'one'], "", ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label("image", "Product Image") !!}
                        {!! Form::file("product_image", ['class' => 'form-control p-3']) !!}
                    </div>
                </div>
            </div>
            {!! Form::submit("Submit", ['class' => 'btn btn-sm btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
