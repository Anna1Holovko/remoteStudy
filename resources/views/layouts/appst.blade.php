<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DEducation</title>

    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project --> 
<link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    DEducation
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' /> -->
       <!-- Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.3.0') }}" rel="stylesheet" /> 

    <!-- подключаем стили Summernote -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
    <div id="app">
      <!--   <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header"> -->

                    <!-- Collapsed Hamburger -->
                    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->

                    <!-- Branding Image -->
                   <!--  <a class="navbar-brand" href="{{ url('/') }}">
                        DEducation
                    </a>
                </div> -->

                <!-- <div class="collapse navbar-collapse" id="app-navbar-collapse"> -->
                    <!-- Left Side Of Navbar -->
                   <!--  <ul class="nav navbar-nav">
                        &nbsp;
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="nav navbar-nav navbar-right"> -->
                        <!-- Authentication Links -->
                        <!-- @guest -->
                        <!-- <li><a href="/themes">Навчання</a></li> -->
                        <!-- <li><a href="{{ route('login') }}">Увійти</a></li> -->
                        <!-- <li><a href="{{ route('register') }}">Зареєструватися</a></li> -->
                        <!-- @else -->
                        <!-- @if(Auth::user()->role == "student") -->
                        <!-- <li><a href="{{ url('/student/themes') }}">Навчання</a></li> -->
                        <!-- <li><a href="{{ url('/home') }}">Профіль</a></li> -->
                        <!-- @elseif(Auth::user()->role == "admin") -->
                        <!-- <li><a href="{{ url('/allthemes') }}">Навчання</a></li> -->
                        <!-- <li><a href="/results">Результати</a></li> -->
                        <!-- <li><a href="{{ url('/home') }}">Профіль</a></li> -->
                        <!-- @else -->
                        <!-- <li><a href="{{ url('/teacher/themes') }}">Мої теми</a></li> -->
                        <!-- <li><a href="/results">Результати</a></li> -->
                        <!-- <li><a href="{{ url('/home') }}">Профіль</a></li> -->
                        <!-- @endif -->
                        <!-- <li class="dropdown"> -->
                       <!--      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false" aria-haspopup="true" v-pre>
                                {{Auth::user()->name}}<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        Вийти
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                        @endguest


                    </ul> 
                </div>
            </div>
        </nav>-->

        @yield('content')
    </div>

</body>

</html>