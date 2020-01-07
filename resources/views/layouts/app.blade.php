<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        footer {
            background-color: #b5dbeb;
            padding: 1px;
            text-align: center;
            color: white;
        }

        header {
            background-color: #b5dbeb;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }
    </style>
</head>
<body>
<div id="app">
    <header data-spy="scroll" data-target=".navbar" data-offset="50"  >
        <nav class="navbar navbar-expand-md " >
            <div class="container" >
                <a  class="navbar-brand" href="{{ route('posts.list')}}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
                <a class="navbar-brand" href="{{ route('users.list')}}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <a  class="navbar-brand" href="{{route('posts.create')}}">
                    {{ 'NewPost' }}
                </a>
                <a  class="navbar-brand" href="{{route('users.mypost')}}">
                    {{ 'MyPost' }}
                </a>
                <form class="form-inline mt-2 mt-md-0" action="{{route('posts.search')}}" method="get">
                    @csrf
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-md-right " style="font-size: medium">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="margin-left: 250px; font-size: 20px" id="navbarDropdown"
                                   class="nav-link dropdown-toggle" href="#"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div style="margin-left: 250px" class="dropdown-menu dropdown-menu-right"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="py-4">
        @yield('content')
        <footer>
            <div class="container">
                <hr>
                <div class="text-center center-block">
                    <p class="txt-railway text-primary" style="font-size: 30px">- Contact Us -</p>
                    <br/>
                    <a href="https://www.facebook.com/sontung.pham.106"><i id="social-fb"
                                                                    class="fa fa-facebook-square fa-3x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i id="social-tw"
                                                               class="fa fa-twitter-square fa-3x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp"
                                                                         class="fa fa-google-plus-square fa-3x social"></i></a>
                    <a href="mailto:pstung2602@gmail.com"><i id="social-em"
                                                            class="fa fa-envelope-square fa-3x social"></i></a>
                </div>
                <hr>
            </div>
        </footer>
    </main>
</div>
</body>
</html>
