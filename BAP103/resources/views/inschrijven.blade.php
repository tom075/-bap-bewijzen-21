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
    <div class="contact_wrapper">
        <form action="verzenden.php" method="post">
            <input type="hidden" name="_token" value="5tiveiqF8Pl507LqoCPeSG9JHtdhPD3P6YO1C7hz">
            <table class="contact_form">
                <tr>
                    <td>VOORNAAM<i class="ster">*</i> </td>
                    <td class="grey"><input name="voornaam" required autofocus maxlength="20" type="text"></td>
                </tr>
                <tr>
                    <td>TUSSENVOEGSEL</td>
                    <td class="grey"> <input name="tussenvoegsel"  maxlength="20"  type="text"> </td>
                </tr>
                <tr>
                    <td>ACHTERNAAM<i class="ster">*</i></td>
                    <td class="grey"> <input name="achternaam" required maxlength="40"  type="text"> </td>
                </tr>
                <tr>
                    <td>E-MAIL<i class="ster">*</i></td>
                    <td class="grey"> <input name="email" required  maxlength="20" type="email"> </td>
                </tr>
                <tr>
                    <td>TELEFOON NUMMER &nbsp; </td>
                    <td class="grey"><input name="telefoonnummer" type="tel"  maxlength="15"> </td>
                </tr>

                <tr>
                    <td>BERICHT<i class="ster">*</i></td>
                </tr>
            </table>
            <textarea name="bericht" required  cols="30" rows="5"></textarea> <br>

            <input type="submit" name="submit">
        </form>


@endsection


@section('footer')
    <p>Nieuwe lessen. GRATIS PROEFLES!</p>
@endsection


