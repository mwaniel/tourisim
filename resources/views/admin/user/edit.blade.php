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
              <h3 class="box-title">Update Admin</h3>
            </div>
            <!-- /.box-header -->
           @include('includes.massage')
            <!-- form start -->
            <form role="form" action="{{ route('user.update',$user->id) }}" method="post">
            {{csrf_field()}}
            {{method_field('patch')}}
            <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                  <label for="name">user name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label for="email">email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"value="{{$user->email}}">
                </div>
                <div class="form-group">
                  <label for="phone">phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="{{$user->phone}}">
                </div>

                <div class="form-group">
                  <label >status</label>
                              <div class="checkbox">
                 <label><input type="checkbox" name="status"
                 @if (old('status')==1 || $user->status ==1)
                 checked
                 @endif
                  value="1">status</label>
                 </div>
                </div>


                <div class="form-group col-lg-12">
                <label >Assign Roles</label>
                    @foreach ($roles as $role)

                    <div class="col-lg-3">
                <div class="checkbox">
                 <label><input type="checkbox" name="role[]" value="{{$role->id}}"
                 @foreach ($user->roles as $user_role)
                 @if($user_role->id == $role->id)
                 checked
                 @endif
                 @endforeach
                 >{{$role->name}}</label>
                 </div>
                 </div>
                    @endforeach



                </div>
                <div class="box">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href="{{ route('user.index') }}" class="btn btn-warning">Back</a>
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
