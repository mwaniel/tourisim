<!doctype html>
<html lang="en">
  <head>
  @include('includes.head')
    </head>
  <body>
    <!---Navbar-->
@include('includes.header_nav')
@section('main-content')
<article>
<div class="container">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
   {!!htmlspecialchars_decode($post->body)!!}
</div>

</div>
</article>
@endsection

@include('includes.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('includes.javascript')
    </body>
</html>
