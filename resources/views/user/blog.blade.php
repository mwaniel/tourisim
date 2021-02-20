<!doctype html>
<html lang="en">
  <head>
  @include('includes.head')
    </head>
  <body>
    <!---Navbar-->
    @include('includes.header_nav')
    <!--End of navbar-->
    <section class="blog-section">
<div class="container">
<div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="text-center pb-2">
                        Recent Blog
                    </h2>
                </div>
            </div>
        </div>
<div class="row">
   
        @foreach($posts as $post)
        <div class="col-lg-4 col-md-6">
                <div class="single-blog">
        <img src="{{Storage::disk('local')->url($post->image1)}}" class="img-fluid" alt="">
        <div class="blog-detail">
    <div class="post-review">
            <a href="{{route('post',$post->slug)}}">
                <h2 class="post-title">
{{$post->title}}
                </h2>
                <h3 class="post-subtitle">
                {{$post->subtitle}}
                </h3>
            </a>
            <p class="post-meta">POsted by<a href="#">boot</a>{{$post->created_at->diffForHumans()}}</p>
        </div>
        </div>
                </div>
        </div>
        @endforeach
        
</div>

</div>

</div>
    </section>
<!---End of Blog Section-->

<!---Contact Section-->
@include('includes.contacts')
<!---End of Contact Section-->
<!------>
@include('includes.insta')
<!---->
@include('includes.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('includes.javascript')
    </body>
</html>
