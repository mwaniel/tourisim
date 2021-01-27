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
                    <h1 class="mb-4 text-capitalize">We Provide a variaty of services which may intrest you
                      </h1>
                      </div>
            </div>
        </div>
    </div>
</section>
    <!---End of Hero-Image-->
<!---services Section-->
@include('includes.service_s')
<!---End of Services Section-->
<!---Package Section-->
@include('includes.package')
<!---End of Package Section-->
<!---Customers Section-->
@include('includes.customer')
<!---End of Customers Section-->
<!--- Blog Section-->
@include('includes.blogs')
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
