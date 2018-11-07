<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Sportschool Salomons - @yield('title')</title>
</head>
<body>

        @section('navigation')
            <nav class="navbar navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}">@yield('page_title')</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/nieuws')}}">Nieuws</a></li>
                            <li><a href="#">Sporten</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Inschrijven</a></li>

                        </ul>

                    </div>
                </div>
            </nav>
        @show
        <div class="img_wrapper">
        @section('image')
            <img class="home_image" src="{{asset('afb/home_image.png')}}" alt="">
        @show
        </div>

        <main>
        @section('content')
            Sorry de pagina kon niet laden
        @show
    </main>
    <footer>
        @section('footer')
            Ook in Westerwatering,  Amsterdam Noord en in Koog aan de Zaan verzorgen wij judolessen.
        @show
    </footer>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>

{{--<!--<a href="{{ route('artikel.show', ['nummer' => 99999]) }}">linkje</a>-->--}}




