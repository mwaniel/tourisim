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
            @include('includes.massage')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('post.update',$post->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('patch')}}
            <div class="box-body">
            <div class="col-lg-6">
            <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" class="form-control" id="title" name="title"value="{{$post->title}}" placeholder="Enter title">
            </div>
            <div class="form-group">
            <label for="subtitle">Post sub-title</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter subtitle"value="{{$post->subtitle}}">
            </div>
            <div class="form-group">
            <label for="slug">Post slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug"value="{{$post->slug}}">
            </div>

            </div>
            <div class="col-lg-6">
            <div class="form-group">
            <label for="image1">image input</label>
            <input type="file" name="image1" id="image1">

            <p class="help-block">image here.</p>
            </div>
            <div class="checkbox">
            <label>
            <input type="checkbox" value="1" name="status" @if ($post->status == 1)checked @endif > publish
            </label>
            </div>

                <div class="form-group">
                <label>select tag</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a tag"
                        style="width: 100%;" name="tags[]">
                  @foreach ($tags as $tag)
                  <option value="{{$tag->id}}"
                  @foreach ($post->tags as $postTag)
                  @if($postTag->id == $tag->id)
                  selected
                  @endif
                  @endforeach
                  >{{$tag->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>select category</label>
                <select name="category[]"class="form-control select2" multiple="multiple" data-placeholder="Select a category"
                        style="width: 100%;">
                  @foreach ($category as $category)
                  <option value="{{$category->id}}"


                  @foreach ($post->category as $postCategory)
                  @if($postCategory->id == $category->id)
                  selected
                  @endif
                  @endforeach

                  >{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box">
            <div class="box-header">
            <h3 class="box-title">write post body
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

            <textarea class="textarea" name="body" placeholder="Place some text here"
            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"id="editor1">{{$post->body}}</textarea>

            </div>
            </div>


            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a  href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
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

