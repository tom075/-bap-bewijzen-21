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
                    <li class="active"><a href="{{url('/nieuws')}}">Nieuws</a></li>
                    <li><a href="#">Sporten</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Inschrijven</a></li>

                </ul>

            </div>
        </div>
    </nav>

@show

@section('image_banner')
    <img class="home_image" src="{{asset('afb/home_image.png')}}" alt="">
@endsection


@section('content')
    <h1>Nieuws</h1>

    <div>
        <div class="nieuws_wrapper">
            <div class="nieuws_item">
                <a href="{{url('artikel/1')}}">  <h1>Herfstvakantie!</h1> </a>
            <img class="nieuws_image" src="{{url('afb/judo.jpg')}}" alt="">
            </div>

        <div class="nieuws_item">
            <p href="{{url('artikel/2')}}"> <h1>Frisse start</h1></p>
            <img class="nieuws_image" src="{{url('afb/judo.jpg')}}" alt="">
        </div>

    <div class="nieuws_item">
        <p href="{{url('artikel/2')}}"> <h1>Info Koegras Tijden</h1> </p>
        <img class="nieuws_image" src="{{url('afb/judo.jpg')}}" alt="">
    </div>

    </div>

@endsection


@section('footer')
    <p>Wij bieden gratis proeflessen aan om de sfeer te proeven in onze sportruimten.</p>
@endsection


