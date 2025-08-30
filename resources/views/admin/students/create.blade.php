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
                        <a href="#">Add New</a>
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif
        @if(Session::has('msg'))
        <div class="alert alert-success">
        {{Session::get('msg') }}
        </div>
        @endif
    <div class="card-body">
        <form class="form-horizontal" action="{{route('admin.student.store')}}" enctype="multipart/form-data"
        method="post">
        @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 text-end control-label col-form-label">name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="First Name Here" name="name"  value="{{old('name')}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" placeholder="Email Here" name="email" value="{{old('email')}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-3 text-end control-label col-form-label">phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="phone" placeholder="phone Here" name="phone"
                            value="{{old('phone')}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="photo" class="col-sm-3 text-end control-label col-form-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="photo" name="photo" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Department</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="department_id">
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach 
                        </select>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Add
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection