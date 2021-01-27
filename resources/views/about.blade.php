<!doctype html>
<html lang="en">
  <head>
  @include('includes.head')
    </head>
  <body>
    <!---Navbar-->
    @include('includes.header_nav')
    <!--End of navbar-->
    <!---Hero-Image-->
    <section class="hero-wrap"
    style="background-image:url('images/hero.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters main-text align-items-center">
            <div class="col-lg-7 col-md-6 d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4 text-capitalize">we are a community of people here to helpin vaccation planing
                      </h1>
                </div>
            </div>
        </div>
    </div>
</section>
    <!---End of Hero-Image-->

<!---Welcome/about section-->
@include('includes.about_about')
<!--- Team Section-->
@include('includes.team')
<!---End of Team Section-->
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
