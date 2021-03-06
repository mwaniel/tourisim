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
              <h3 class="box-title">Titles</h3>
             </div>
                <!-- /.box-header -->
                @include('includes.massage')
                <!-- form start -->
                <form role="form" action="{{route('popular.update',$popular->id)}}" method="post"enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('patch')}}
              <div class="box-body">
                  <div class="col-lg-6">
                  <div class="form-group">
                  <label for="title">popular title</label>
                  <input type="text" class="form-control" id="title" name="title"value="{{$popular->title}}" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="price">popular price</label>
                  <input type="text" class="form-control" id="price" name="price"value="{{$popular->price}}" placeholder="Enter price">
                </div>

                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <label for="image">image input</label>
                  <input type="file" name="image" id="image">

                  <p class="help-block">image here.</p>
                </div>
                </br>
                </br>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status"@if ($popular->status == 1)checked @endif> publish
                  </label>
                </div>
              </div>
              </div>

              <!-- /.box-body -->
              <div class="box">
                <div class="box-header">
              <h3 class="box-title">write  body
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
                </div>
             <!-- /.box-header -->
                <div class="box-body pad">
              <form>
                <textarea class="textarea"id="editor1" name="body" placeholder="Place some text here"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$popular->body}}</textarea>
              </form>
                </div>
                </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href="{{ route('popular.index') }}" class="btn btn-warning">Back</a>
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
