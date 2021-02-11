<!doctype html>
<html lang="en">
  <head>
  @include('includes.head')
    </head>
  <body>
    <!---Navbar-->
@include('includes.header_nav')
<section class="hero-wrap"
    style="background-image:url('images/hero.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters main-text align-items-center">
            <div class="col-lg-7 col-md-6 d-flex align-items-end">
                <div class="text"><h1 class="mb-4 text-capitalize">
                {!!htmlspecialchars_decode($post->title)!!}
                </h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-end">
                <div class="text"><h2 class="mb-4 text-capitalize">
                {!!htmlspecialchars_decode($post->subtitle)!!}
                </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<article>
<div class="container">
    <div class="row">
        
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<small>created at {{$post->created_at->diffForHumans()}}</small>

    @foreach ($post->category as $category)
<small class="pull-right" style="margin-right:20px">
    {{$category->name}}
</small>
    @endforeach


{!!htmlspecialchars_decode($post->body)!!}
<h3>Tag Clouds</h3>
@foreach ($post->tags as $tag)
<small class="pull-left" style="margin-right:20px;border-radius:5px; border:1px solid gray; padding:5px;">
    {{$tag->name}}
</small>
    @endforeach
</div>
</div>
</div>
</article>
@include('includes.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('includes.javascript')
    </body>
</html>
