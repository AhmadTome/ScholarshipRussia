<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>المنحة الروسية لطلبة البكالوريس</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adverts.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<style>
    body,html{
        height: 100%;
        margin: 0;
    }
    #app{
        background-image: url("images/scholarship_background.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }
</style>


<body ng-app="myApp">

    <script src="{{ asset('js/myscript_Angularjs.js') }}"></script>

    <div id="app" style="height: 100%;">
        <nav class="navbar navbar-default navbar-static-top" style="opacity: 0.9">
            <div class="container">
                <div class="navbar-header pull-right">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/previewApplicationScholarship') }}">
                        تصفح طلبات المنح
                    </a>

                    <a class="navbar-brand" href="{{ url('/EditAdverts') }}">
                        تعديل إعلان
                    </a>  <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/addAdverts') }}">
                        إضافة اعلان
                    </a>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        الصفحة الرئيسية
                    </a>  <!-- Branding Image -->
                      <!-- Branding Image -->



                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        <!-- Authentication Links -->

                        @guest
                            <!--
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


</body>
</html>
