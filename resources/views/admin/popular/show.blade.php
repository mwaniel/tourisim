@extends('admin.layouts.app')
@section('head')


@endsection
@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">popular places</h3>
            <a class='col-lg-offset-5 btn btn-success' href="{{route('historical.create')}}">Add new</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>price</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($popular as $popularp)
                    <tr>
                  <td>{{$loop->index + 1 }}</td>
                  <td>{{ $popularp->title}}</td>
                  <td>{{ $popularp->price}}</td>
                  <td><a href="{{route('popular.edit',$popularp->id)}}" ><span class="glyphicon glyphicon-edit"></span></a></td>
                  <form id="delete-form-{{$popularp->id}}" method="post" action="{{route('popular.destroy',$popularp->id)}}" style="display: none">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                </form>
                  <td><a href="" onclick="if(confirm('Are you sure,You want to delete?')){ event.preventDefault();document.getElementById('delete-form-{{$popular->id}}').submit();}else{event.preventDefault();}" ><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>price</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
