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
                        <th>Job Title</th>
                        <th>Salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->job_id }}</td>
                        <td>{{ $item->job_title }}</td>
                        <td>{{ $item->salary }}</td>
                        <td>
                            <a href="{{ route('jobs.edit',['id' => $item->job_id]) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
