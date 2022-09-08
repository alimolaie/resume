<!DOCTYPE html>
<html lang="en">
@php

    use Illuminate\Support\Facades\Auth;
    $user=Auth::user()->name;

@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>پنل مدیریت</title>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/basic.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/basic.min.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('../assets/styles/msg.css')}}"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('datepicker/novindatepicker.css')}}">
{{--  <link rel="stylesheet" href="{{url('http://babakhani.github.io/PersianWebToolkit/doc/lib/persian-datepicker/dist/css/persian-datepicker.css')}}">--}}
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap-rtl.min.css')}}">
  <!-- template rtl version -->
  <link rel="stylesheet" href="{{asset('dist/css/custom-style.css')}}">
  <link rel="stylesheet" href="{{asset('css/msg.css')}}">
  <link rel="icon" href="images/favicon.png">
</head>
<body class="hold-transition sidebar-mini">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    پنل مدیریت
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav  float-left">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ورود</a>
                            </li>
                        @else

                            <li class="nav-item dropdown" style="z-index: 10000">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{$user}}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out ml-1"></i>
                                        خروج

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
            @include('fragments.errors')
            @include('fragments.message')
            <div class="wrapper mt-4">
            @yield('content')
            </div>
        </main>
    </div>
    <!-- jQuery -->
<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE -->
<script src="{{asset("dist/js/adminlte.js")}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset("datepicker/novindatepicker.js")}}"></script>
{{--<script src="{{url('http://babakhani.github.io/PersianWebToolkit/doc/lib/persian-datepicker/dist/js/persian-datepicker.js')}}"></script>--}}
{{--<script src="{{url('http://babakhani.github.io/PersianWebToolkit/doc/lib/persian-datepicker/dist/js/persian-datepicker.js')}}"></script>--}}
{{--<script src="{{url('http://babakhani.github.io/PersianWebToolkit/doc/js/datepicker-example.js')}}"></script>--}}
<script src="{{asset("dist/js/demo.js")}}"></script>
<script src="{{asset("dist/js/pages/dashboard3.js")}}"></script>
<script>
    document.querySelectorAll('.datepicker').novinDatePicker();
</script>
</body>
</html>
