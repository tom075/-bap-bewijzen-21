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
        <div class="artikel_wrapper">
        <div class="artikel_item">
        <h1>{{$titel}}</h1>
        <p> {{$text}}</p>
            <a href="{{url('/nieuws')}}">TERUG</a>
        </div>
        <img class="artikel_image" src="{{$image}}" alt="">
        </div>
@endsection


@section('footer')
    <p>Wij sporten in een zaal van 170 m2 en een zaal van 70 m2. Ook beschikken wij over een gezellige ontvangstruimte.</p>
@endsection



