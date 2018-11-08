@extends('layouts.master')

@section('title', 'Nieuws')


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
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/nieuws')}}">Nieuws</a></li>
                    <li><a href="{{url('/sporten')}}">Sporten</a></li>
                    <li class="active"><a href="{{url('/contact')}}">Contact</a></li>
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
    <h1>Contact</h1>
    <h3> HOOFDLOCATIE</h3>
    <ul>
        <li>  Sportschool Salomons</li>
        <li>   Blooksven 10</li>
        <li> 1504 AN Zaandam</li>
    </ul>
    <h3>JUDOJEUGDDEPENDANCES</h3>
    <p>   Westerwatering</p>
    <ul>
    <li>  Gymzaal van Meverstraat</li>
    <li>   Zaandam</li>
    </ul>

    <p>Het Universum</p>
    <ul>
        <li>  Gymzaal Th.Weeversweg 4 </li>
        <li>   Amsterdam Noord </li>
    </ul>

    <p>  OBS. De Piramide Oostzaan </p>
    <ul>
        <li> Pinkstraat Koog a/s Zaan</li>
        <li> Gymzaal</li>
    </ul>


@endsection


@section('footer')
<p>Ook in Westerwatering,  Amsterdam Noord en in Koog aan de Zaan verzorgen wij judolessen.
</p>@endsection


