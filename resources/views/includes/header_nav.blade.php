<nav class="navbar navbar-expand-lg navbar-light main-navbar
      bg m-navbar-light" id="main-navbar">
      <div class="container">
          <a class="navbar-brand"href="#">Grand tours</a>

          <button class="navbar-toggler"type="button"data-toggle="collapse"
          data-target="#my-nav" aria-controls="p-nav"aria-expanded="false"
          aria-label="toggle-navigation">
        <span>Menu</span>
        </button>
        <div class="collapse navbar-collapse"id="my-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="{{url('/')}}"class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('about')}}"class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('popularplace')}}"class="nav-link">Popular Places</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('services')}}"class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('historical')}}"class="nav-link">Historical Places</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('blog')}}"class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('contact')}}"class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </li>
            </ul>
        </div>
      </div>
    </nav>
