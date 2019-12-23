<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DEducation</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/nunito-sans" type="text/css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">DEducation</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
         <!--    <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li> -->
          @guest
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/themes">Навчання</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="{{ route('login') }}">Увійти</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="{{ route('register') }}">Зареєструватися</a>
                    </li>
                    @else

                    @if(Auth::user()->role == "student")

                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/student/themes">Навчання</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/home">Профіль</a>
                    </li>
                    @elseif(Auth::user()->role == "admin")
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/allthemes">Навчання</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/results">Результати</a>
                    </li>

                    @else

                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/teacher/themes">Мої теми</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/results">Результати</a>
                    </li>
                   <!--  <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/home">Профіль</a>
                    </li> -->

                    @endif
                                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
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
  </nav>
 <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Почни навчання вже зараз!</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Твоє улюблене застосування для корпоративного дистанційного навчання</p>
          <!-- <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('login') }}">Увійти</a> -->
          @guest
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('login') }}">Увійти</a>
                    @else

                    @if(Auth::user()->role == "student")
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="/home">Профіль</a>
          @elseif(Auth::user()->role == "teacher")
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="/teacher/themes">Теми</a>

                    @elseif(Auth::user()->role == "admin")
                    <a class="nav-link text-white" href="/results">Результати</a>

                    @else
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('login') }}">Увійти</a>

                    @endif
                    @endguest
        </div>
      </div>
    </div>
  </header>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

</body>

</html>
