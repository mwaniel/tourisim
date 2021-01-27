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
                    <h1 class="mb-4 text-capitalize">get yourself a perfect tour
                        for your next vaccation
                      </h1>
                      <p style="font-size:18px;">
                    we are  here to provide you with alternatives for you holiday and vaccation,you need not to worry but trust us we are here for you.</p>
                    <a href="{{url('more')}}" class="btn btn-hero py-2 px-3">View all</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!---End of Hero-Image-->
<!---Search section-->
<section>
    <div class="section-search">
    <div class="container">
      <div class="row">
        <div class="col-md-12 tab-search">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Flights</a>
              <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> Hotels</a>
              <a class="nav-link p-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Car Rents</a>
              <a class="nav-link p-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"> Cruises</a>
            </div>
          </div>

          <div class="tab-content py-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="block-17">
                <form class="d-block d-lg-flex">
                  <div class="fields d-block d-lg-flex">

                    <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>

                    <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                    <div class="check-out one-third"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                    <div class="select-wrap one-third">
                   <select name="" id="" class="form-control">
                        <option value="">Guest</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3+</option>

                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Find Flights">
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="block-17">
                <form action="" method="post" class="d-block d-lg-flex">
                  <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Hotel"></div>

                    <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                    <div class="check-out one-third"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Guest</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3+</option>

                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Find Hotels">
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <div class="block-17">
                <form action="" method="post" class="d-block d-lg-flex">
                  <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>

                    <div class="check-in one-third"><input type="text" id="start_date" class="form-control" placeholder="Start date"></div>

                    <div class="check-out one-third"><input type="text" id="return_date" class="form-control" placeholder="Return date"></div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Guest</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3+</option>

                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Find Car">
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <div class="block-17">
                <form action="" method="post" class="d-block d-lg-flex">
                  <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third one-third-1"><input type="text" class="form-control" placeholder="Search Location"></div>


                    <div class="check-out one-third one-third-1"><input type="text" id="start_date" class="form-control" placeholder="Check-out date"></div>

                    <div class="select-wrap one-third one-third-1">
                      <div class="icon"></div>
                      <select name="" id="" class="form-control">
                        <option value="">Categories</option>
                        <option value="">Suite</option>
                        <option value="">Super Deluxe</option>
                        <option value="">Economy</option>

                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Find Cruise">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!---End of Search section-->
<!---Welcome/about section-->
@include('includes.about_about')
<!------------->
<!---Popular Places-->

    <!--/ End of Popular Places-->
    <!-- Other Popular  -->
    @include('includes.p_places')
<!--end of Popular Places-->
<!---services Section-->
@include('includes.service_s')
<!---End of Services Section-->
<!--- Team Section-->
@include('includes.team')
<!---End of Team Section-->
<!---Package Section-->
@include('includes.package')
<!---End of Package Section-->
<!--- Historical Places Section-->
@include('includes.historic')
<!---End of Historical Places Section-->
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
