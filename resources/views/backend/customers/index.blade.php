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
                        <th>Customer Id</th>
                        <th>Sales Id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Laptop</td>
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
