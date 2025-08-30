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
                        <th>email</th>
                        <th>phone</th>
                        <th>photo</th>
                        <th>department_id</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td><img src="{{asset('storage/'.$student->photo)}}" height='105px' alt=""></td>
                        <td>{{ $student->department_id }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>{{ $student->updated_at }}</td>
                        <td>
                            <a class="btn btn-outline-primary" href="{{route('admin.student.show',$student->id)}}">show</a>
                            <a class="btn btn-outline-success" href="{{route('admin.student.edit',$student->id)}}">edit</a>
                            
                            <form class="d-inline" action="{{route('admin.student.destroy',$student->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="delete" class="btn btn-outline-danger"></input >
                            </form>
                        </td>
        
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection