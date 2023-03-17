@extends('backend.layouts.main')
@section('main-content')
<div class="cotainer py-4">
    <button class="btn btn-sm btn-success text-center">Add Job</button>
</div>
<div class="cotainer">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>SNo.</th>
                        <th>Product Name</th>
                        {{-- column will be added in database --}}
                        <th>Product Image</th>
                        <th>Description</th>
                        <th>Qty Stock</th>
                        <th>Price</th>
                        <th>OnHand</th>
                        <th>Date of Supply</th>
                        <th>Supplier</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>xyz</td>
                        <td>abc@gmail.com</td>
                        <td>123456789102</td>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, iusto.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>job title xyz</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
