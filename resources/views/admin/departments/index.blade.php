@extends('admin.layouts.app')
@section('breadcrumb')
<div class="row">
    <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Students</h4>
        <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">students</a>
                    </li>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                </thead>
                <tbody>
                                            @foreach ($departments as $department)

                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->created_at }}</td>
                        <td>{{ $department->updated_at }}</td>
                        <td>
                            <a class="btn btn-outline-primary" href="{{route('admin.department.show',$department->id)}}">show</a>
                            <a class="btn btn-outline-success" href="">edit</a>
                            <a class="btn btn-outline-danger" href="">delete</a>
                        </td>
                      
                    </tr>
                      @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection