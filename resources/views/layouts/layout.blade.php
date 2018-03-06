<!doctype html>

<html lang="{{ app()->getLocale() }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Blog2 </title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="/css/blog2.css" />

    </head>

    <body>
      <div class="container">
        <ul class="navbar-nav ml-auto">

            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else
                <li class="nav-item dropdown"><em>You are logged in as </em>
                <a href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} </span>
                </a>
                <div>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
                </li>
            @endguest
        </ul>

        @yield('header')

        @include('layouts.header')

        @include ('layouts.sidebar')

        <div class="content">
          @yield('content')
        </div>

</div> <!-- end container -->
        @include('layouts.footer')

    </body>

</html>
