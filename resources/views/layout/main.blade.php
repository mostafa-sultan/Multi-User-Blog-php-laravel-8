<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mini Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">--}}

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-12 search-form-wrap js-search-form">
                    <form method="get" action="#">
                        <input type="text" id="s" class="form-control" placeholder="Search...">
                        <button class="search-btn" type="submit"><span class="icon-search"></span></button>
                    </form>
                </div>
                @guest

                    @if (Route::has('register'))
                        <div class="col-4 site-logo">
                            <a href="/" class="text-black h2 mb-0">Home</a>
                        </div>


                    @endif
                @else
                <div class="col-4 site-logo">
                    <a href="/" class="text-black h2 mb-0">Home</a>



                </div>

                @endguest
                <div class="col-8 text-right">
                    <nav class="site-navigation" role="navigation">
                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                            <li><a href="/">Home</a></li>
                            <li><a href="/posts">posts</a></li>

                            @auth
                                <li><a href="/profile/{{ Auth::user()->email }}">profile</a></li>
                                <li><a href="/dashbord">dashpoard</a></li>

                                <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            @endauth

                            @guest

                                <li><a href="/login">login</a></li>
                                <li><a href="/register">regester</a></li>
                            @endguest

                             <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
                        </ul>
                    </nav>
                    <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
            </div>

        </div>
    </header>


      @yield('category')


      @yield('post')


      @yield('news')

      @yield('footer')








      <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
      <script src="{{ asset('js/jquery-ui.js')}}"></script>
      <script src="{{ asset('js/popper.min.js')}}"></script>
      <script src="{{ asset('js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
      <script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>
      <script src="{{ asset('js/aos.js')}}"></script>

      <script src="{{ asset('js/main.js')}}"></script>


</body>
</html>
