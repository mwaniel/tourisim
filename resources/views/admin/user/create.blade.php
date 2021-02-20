@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
 <!-- general form elements -->
 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add admin</h3>
            </div>
            <!-- /.box-header -->
           @include('includes.massage')
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="post">
            {{csrf_field()}}
            <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                  <label for="name">user name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="email">email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                </div>
                <div class="form-group">
                  <label for="confirm_password">Confirm password</label>
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirm password">
                </div>
                <div class="form-group col-lg-12">
                <label >Assign Roles</label>
                    @foreach ($roles as $role)

                    <div class="col-lg-3">
                <div class="checkbox">
                 <label><input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}</label>
                 </div>
                 </div>
                    @endforeach



                </div>
                <div class="box">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
            </div>
                  </div>

                  </div>


            </form>
          </div>
          <!-- /.box -->
          <!-- /.box -->


        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
