@extends('layouts.master')

@section('title', 'Home')


@section('page_title')
    Sportschool Salomons
@endsection

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
                    <li><a href="{{url('/sporten')}}">Sporten</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                    <li><a href="{{url('/inschrijven')}}">Inschrijven</a></li>

                </ul>

            </div>
        </div>
    </nav>

@show

@section('image_banner')
    <img class="home_image" src="{{asset('afb/home_image.png')}}" alt="">
@endsection


@section('content')
    <h1>Home</h1>
    <p>Sportschool Salomons is een plek voor jong en oud waar serieus en ontspannen gesport kan worden. Niet voor niets sporten er al hele gezinnen bij Salomons. Er is voor ieders wat wils en op alle niveaus. Van kick-fit groepslessen tot serieuze wedstrijdtrainingen in judo of boksen. De enthousiaste en gediplomeerde leiding van Sportschool Salomons nodigt u graag uit voor een bezoek en een proefles in een van onze ruime sportzalen.
    </p>

    <img class="plaatje_buiten" src="{{asset('afb/plaatje_buiten.jpeg')}}" alt="">
@endsection


@section('footer')
    <p>Wij sporten in een zaal van 170 m2 en een zaal van 70 m2. Ook beschikken wij over een gezellige ontvangstruimte.</p>
@endsection


