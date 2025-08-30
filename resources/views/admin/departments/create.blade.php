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
      <div class="card-body">
          <form class="form-horizontal" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              enctype="multipart/form-data" method="post">
              <div class="card-body">
                  <div class="form-group row">
                      <label for="name"
                          class="col-sm-3 text-end control-label col-form-label">name</label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" id="name"
                              placeholder="First Name Here" name="name" />
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="email"
                          class="col-sm-3 text-end control-label col-form-label">Email</label>
                      <div class="col-sm-9">
                          <input type="email" class="form-control" id="email"
                              placeholder="Email Here" name="email" />
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="phone"
                          class="col-sm-3 text-end control-label col-form-label">phone</label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" id="phone"
                              placeholder="phone Here" name="phone" />
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="fname"
                          class="col-sm-3 text-end control-label col-form-label">Department</label>
                      <div class="col-sm-9">
                          <select class="form-control" name="department">
                              <option value=""></option>
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