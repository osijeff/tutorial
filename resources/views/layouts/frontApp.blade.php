<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/solid.css" integrity="sha384-uKQOWcYZKOuKmpYpvT0xCFAs/wE157X5Ua3H5onoRAOCNkJAMX/6QF0iXGGQV9cP" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/regular.css" integrity="sha384-OEIzojYBMrmz48aIjVQj7VG38613/sxpP58OW9h5zBYC7biGFlv9tyu5kWmaAYlF" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/brands.css" integrity="sha384-BCEeiNUiLzxxoeYaIu7jJqq0aVVz2O2Ig4WbWEmRQ2Dx/AAxNV1wMDBXyyrxw1Zd" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/fontawesome.css" integrity="sha384-HU5rcgG/yUrsDGWsVACclYdzdCcn5yU8V/3V84zSrPDHwZEdjykadlgI6RHrxGrJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="public/css/owl.theme.default.css">
    <link rel="stylesheet" href="owl.carousel.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/1.5.2/css/ionicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.pkgd.min.js"></script>
<script src="public/js/owl.carousel.js"></script>
</head>
<body>
        <div class="topbanner">
            <h2 class="title-head ">The Apostolic church- South Africa</h2>
            <div>
            <a  href="#" class="button is-primary giveOnline" style="color:black;">Give Online</a>
            <a  href="#" class="button is-primary giveOnline" style="color:black;">Join The Community</a>
            </div>
         </div>
    <header>

                            <div class="navbar-item has-dropdown is-hoverable">
                              <a class="navbar-link">
                                About Us
                              </a>

                              <div class="navbar-dropdown">
                                <a class="navbar-item">
                                  About us
                                </a>
                                <a class="navbar-item">
                                  Believes
                                </a>
                                <a class="navbar-item" href="{{url('/conduct')}}">
                                  code of conduct
                                </a>
                                <a href="" class="navbar-item">Leadership</a>
                                <hr class="navbar-divider">
                                <a class="navbar-item" href="{{url('/history')}}">
                                  History
                                </a>
                              </div>
                            </div>

                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link menu-button">
                                    Resources
                                </a>

                                <div class="navbar-dropdown">
                                  <a class="navbar-item" href="{{url('/gallery')}}">
                                   Gallery
                                  </a>
                                  <a class="navbar-item">
                                    Event
                                  </a>
                                  <a class="navbar-item" href="{{url('/')}}">
                                  Audio Podcast
                                  </a>

                                  <hr class="navbar-divider">
                                  <a href="{{url('/announcements')}}" class="navbar-item">Announcements</a>
                                </div>
                              </div>

                              <div class="navbar-item has-dropdown is-hoverable">
                                  <a class="navbar-link" >
                                    Branches
                                  </a>

                                  <div class="navbar-dropdown">
                                    <a class="navbar-item" href="{{url('/pretoria')}}">>
                                     Pretoria
                                    </a>
                                  </div>
                                </div>

                                <a class="navbar-item" href="{{url('/contactUs')}}">
                                    Contact Us
                                  </a>
                                  <a class="navbar-item" href="{{url('/news')}}">News</a>


                          </div>

                          <div class="navbar-end">
                            <div class="navbar-item">
                              <div class="buttons">
                                <a class="button is-primary">
                                  <strong>Sign up</strong>
                                </a>
                                <a class="button is-light">
                                  Log in
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </nav>
            </header>


    <div id="app">



        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Fonts --> --}}

    <script>

      var flkty = new Flickity( '.main-gallery', {
        cellAlign: 'left',
        contain: true,
        wrapAround: true,
        prevNextButtons: false,
        autoPlay: 5000
      });

      </script>
</body>

</html>
