<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
   

</head>

<body>
<div id="app">
    <nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark">
        <img class="navbar-brand ml-5" src="logo.PNG" id="logo_custom" width="height: 40px !important;width:10%" alt="logo">
        <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
                    <a class="nav-link" href="/"><b>Page 1</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/page-2"><b>Page 2</b></a>
                </li>

            </ul>
        </div>
    </nav>

    @yield('content')
</div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
   
</body>

</html>