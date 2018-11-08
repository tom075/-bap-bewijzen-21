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
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                    <li class="active"><a href="{{url('/inschrijven')}}">Inschrijven</a></li>

                </ul>

            </div>
        </div>
    </nav>

@show

@section('image_banner')
    <img class="home_image" src="{{asset('afb/home_image.png')}}" alt="">
@endsection


@section('content')
    <h1>Inschrijven</h1>
    <form action="">
        <label>Voornaam <input type="text"></label><br>
        <label>Voornaam <input type="text"></label><br>
        <label>Voornaam <input type="text"></label><br>
        <label>Voornaam <input type="text"></label><br>
        <label>Voornaam <input type="text"></label><br>

    </form>


@endsection


@section('footer')
    <p>Nieuwe lessen. GRATIS PROEFLES!</p>
@endsection


