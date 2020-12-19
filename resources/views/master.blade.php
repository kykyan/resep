<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Masakin merupakan website penyedia resep makanan, dimana orang-orang dapat berbagi resep sesuka mereka">
    <meta name="keywords" content="resep, resep makanan, resep traditional, resep nusantara, desert, kue">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masakin</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <!-- style Custom -->
    <link rel="stylesheet" href="{{ asset ('css/main.css') }}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset ('img/icon/Multicolor.svg') }}" type="image/x-icon">
    <!-- font awesome -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">
                <img src="img/icon/logo.svg" alt="" class="mr-2">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-0">
                    <li class="nav-item mr-3 active"> <a class="nav-link" href="/">Home </a> </li>
                    <li class="nav-item mr-3"><a class="nav-link" href="{{ route('about') }}"> About </a></li>
                    <li class="nav-item mr-3"><a class="nav-link" href="{{ route('faq') }}"> FAQ </a></li>
                </ul>
                <!-- Search -->
                <form class="form-inline" action="/search" method="GET">
                    <div class="md-form my-0 ">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" aria-label="Search" value="{{ old('search') }}">
                    </div>
                    <button class="btn btn-outline-primary btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
                </form>
                @if(Route::as('login'))
                @auth
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle btn-md my-2 my-sm-0 ml-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </div>
                    </div>
                        @else
                        <a class="btn btn-primary btn-md my-2 my-sm-0 ml-3" href="{{ route('login') }}">
                            Login
                        </a>
                        @endauth
                    @endif
                <!-- Akhir Button Login -->
            </div> <!-- navbar-collapse.// -->
        </div>
    </nav>
    <!-- akhir navbar -->

    @yield('content')

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <div
              class="row border-top justify-content-center align-items-center p-4"
            >
              <div class="col-auto text-gray-500 font-weight-light text-center">
                2020 Copyright Masakin • All rights reserved • Made in Jakarta
              </div>
            </div>
          </div>
    </footer>
    <!-- akhir footer -->

    <!-- script -->
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <!-- custom script -->
    <script src="js/main.js"></script>
    <!-- bootstrap script -->
    <script src="js/bootstrap.min.js"></script>
    <!-- script font awesome -->
    <script src="https://kit.fontawesome.com/d9ca13cb73.js" crossorigin="anonymous"></script>

</body>

</html>