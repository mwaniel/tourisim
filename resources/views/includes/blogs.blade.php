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
                    <img src="images/img-1.jpg" class="img-fluid" alt="">
                    <div class="blog-detail">
                        <div class="blog-date">
                        {{$post->created_at->diffForHumans()}}
                        </div>
                        <a href="#"class="tag">#travel</a>
                    </div>
                    <h4><a href="#">Travel and Tours Companies play a critical role between the travelers and the suppliers. In...</a></h4>
                </div>
            </div>
            <!----->
          @endforeach
            <!----->
        </div>
    </div>
</section>
