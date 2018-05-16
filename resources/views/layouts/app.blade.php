<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">

#login {
    margin: 50px auto;
    width: 400px;
}

#login h2 {
    background-color: #f95252;
    -webkit-border-radius: 20px 20px 0 0;
    -moz-border-radius: 20px 20px 0 0;
    border-radius: 20px 20px 0 0;
    color: #fff;
    font-size: 28px;
    padding: 20px 26px;
}

#login h2 span[class*="fontawesome-"] {
    margin-right: 14px;
}

#login fieldset {
    background-color: #fff;
    -webkit-border-radius: 0 0 20px 20px;
    -moz-border-radius: 0 0 20px 20px;
    border-radius: 0 0 20px 20px;
    padding: 20px 26px;
}

#login fieldset p {
    color: #777;
    margin-bottom: 14px;
}

#login fieldset p:last-child {
    margin-bottom: 0;
}

#login fieldset input {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

#login fieldset input[type="email"], #login fieldset input[type="password"] {
    padding: 4px 10px;
    width: 328px;
}

#login fieldset input[type="submit"] {
    background-color: #33cc77;
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 4px 0;
    width: 100px;
}

#login fieldset input[type="submit"]:hover {
    background-color: #28ad63;
}      
#register {
    width: 40%;
    margin: 50px auto;
}

#register h2 {
    background-color: #f95252;
    -webkit-border-radius: 20px 20px 0 0;
    -moz-border-radius: 20px 20px 0 0;
    border-radius: 20px 20px 0 0;
    color: #fff;
    font-size: 28px;
    padding: 20px 26px;
}

#register h2 span[class*="fontawesome-"] {
    margin-right: 14px;
}

#register fieldset {
    background-color: #fff;
    -webkit-border-radius: 0 0 20px 20px;
    -moz-border-radius: 0 0 20px 20px;
    border-radius: 0 0 20px 20px;
    padding: 20px 26px;
}

#register fieldset p {
    padding-bottom: 10px;
    color: #777;
    margin-bottom: 14px;
}

#register fieldset p:last-child {
    margin-bottom: 0;
}

#register fieldset input {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

#register fieldset input[type="email"], #register fieldset input[type="password"] {
    padding: 4px 10px;
}

#register fieldset input[type="submit"] {
    background-color: #33cc77;
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 4px 0;
    width: 100px;
}

#register fieldset input[type="submit"]:hover {
    background-color: #28ad63;
}
.invalid-feedback{
    color: red;
}
#register label {
        margin-bottom: 15px !important; 
}
</style>
</head>
<body style="background-color:#fdf9fa">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
