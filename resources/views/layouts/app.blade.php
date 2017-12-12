<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/opsse.css') }}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Scripts -->


</head>
<body>

  <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                 <img src="{{asset('img/logo.jpg')}}" alt="Logo ops se" style="width:30px; height:20px;">
              </a>
              <a class="navbar-brand text-danger" href="{{ url('/') }}">
                  <strong>Home</strong>
              </a>
              <a class="navbar-brand text-success" href="#">
                <strong>Blog</strong>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                          <li class="nav-item">
                            <form class="form-inline">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success mr-sm-4 my-2 my-sm-0" type="submit">Search</button>
                            </form>
                          </li>
                      @if (Auth::guest())
                          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-primary">Login</a></li>
                          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-primary">Register</a></li>
                      @else
                          <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">
                                  {{ Auth::user()->name }}
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                  <a href="{{ route('logout') }}" class="dropdown-item"
                                     onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </div>
                          </li>
                      @endif
                  </ul>
              </div>
          </div>
      </nav>
  </div>

      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Hello ! Selamat Datang~</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              @if(session('status'))
                  {{ session('status') }}
               @endif
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
            </div>

          </div>
        </div>
      </div>

@yield('content')

<footer class="align-self-end">
  <nav class="navbar navbar-expand-lg navbar-light navbar-bottom">
    <div class="container">
        <p>&copy; ops-se.com</p>
    </div>
  </nav>
</footer>


 <!-- Scripts -->
 <script src="{{asset('js/jquery-3.2.1.min.js')}}" charset="utf-8"></script>
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{asset('js/jquery.viewportchecker.js')}}" charset="utf-8"></script>
 <script>
 $(document).ready(function() {
    $('.postnya').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 3
       });
  });
 </script>

 <script>
   $(document).ready(function() {
      $('.tombol_menu').hover(
        function(){
          $(this).find('.tombol').addClass("animated rubberBand");
        },
        function(){
          $(this).find('.tombol').removeClass("animated rubberBand");
        },
      );
    });
 </script>

 <script>
   $(document).ready(function(){
     $('.isi-blog a').attr('target', '_blank');
   });
 </script>

</body>
</html>
