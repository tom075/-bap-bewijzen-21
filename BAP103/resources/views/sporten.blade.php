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
                    <li class="active"><a href="{{url('/sporten')}}">Sporten</a></li>
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
    <h1>Sporten</h1>

    <h2>50+</h2>
    <p>Een halve eeuw ga je al mee en tegenwoordig is dat helemaal niet oud meer, veertig jaar terug was dat wel het
        geval!

        Dit heeft te maken met onze voeding en leefgewoonten, we zijn hier meer bewust van geworden.

        50+……… er zijn genoeg voorbeelden om ons heen van mensen die soepel en fit door het leven te gaan..

        Een totale workout zowel lichamelijk als geestelijk bedoeld voor vrouwen en mannen die net nog iets meer uit het
        lichaam willen halen.

        U kunt diversen groepslessen bij wonen van seniorfit, recreatiejudo, dames keep fit, spinning,…….

        Na al die inspanning een kop thee/koffie en ervaring met elkaar delen of ander leuk gesprek……

        Dus ik zou zeggen kom over die drempel en trek de stoute schoenen aan, en neem een proefles bij onze sportschool
        Salomons die bekend staat om zijn prettige en sociale sfeer…….</p>

    <h2>Judo</h2>
    <p>Judo is een olympische sport die geschikt is voor jong en oud.


        Er zijn op dit moment enorm veel ideeën en rages die op body en mind gericht zijn. Judo bestaat al meer dan 100
        jaar en is eigenlijk de vorm van sportbeoefening die alles in zich heeft, maar doordat het een sport is met vele
        technische mogelijkheden zullen de beoefenaars er nooit op uitgekeken zijn.

        Er zijn miljoenen beoefenaars overal ter wereld en wordt recreatief en op wedstrijdniveau beoefend.

        Judo kan een deel uitmaken van de algemene opvoeding en vervult daarin een sociale en pedagogische functie.
        Discipline, doorzettingsvermogen, respect voor elkaar en samenwerken is de eerste gedachte achter het judo.</p>

    <h2>Kickboksen</h2>
    <p>Kickboksen is een vechtsport waarbij zowel de handen als de benen mogen worden gebruikt. De sport kent zijn
        oorsprong in Japan en de Verenigde Staten, waar het begin jaren zeventig populair werd. Het kickboksen in de
        U.S.A. is ontstaan als systeem om verschillende stijlen vechtsporters zich met elkaar te laten meten. Het
        kickboksen in Japan heeft zich van harde karatestijlen uit ontwikkeld met invloeden van het muay thai.

        Bij kickboksen worden de stoten van het boksen gecombineerd met de trappen uit sporten zoals karate en
        taekwondo. Toch is de manier van trappen afkomstig uit het muay thai anders. Dit verschil wordt waarschijnlijk
        veroorzaakt door de verschillende vormen van competitie. Bij taekwondo draait het om het scoren van punten,
        terwijl je bij muay thai iemand zo hard mogelijk wil raken. Elleboogstoten zijn in het kickboksen, anders dan
        bij de traditionele vorm Muay Thai (Thaiboxing), niet toegestaan.</p>

    <h2>Kick Fit</h2>
    <p>Onder leiding van Widjay wordt er getraind op muziek. Schoppen en stoten op een bokszak vormen de hoofdmoot van
        een pittige, plezierige training waar je helemaal in op gaat. Een buikspier blok staat ook op het programma,
        kortom een conditionele training voor dames en heren. Maandag en woensdag om 19.00 uur.

        Zaterdag om 10.00 uur. Deze les is wat meer ingericht als zaktraining.

        Wie heeft lef, neem een proefles!!!!!!!!!!!!!!!!</p>
    <h2>Spinning</h2>
    <p>Wij spinnen op de allernieuwste Schwinn spinningbikes!

        Het spinning programma is een leuke en veilige groepstraining voor iedereen, mannen en vrouwen, jong en oud,
        beginner of gevorderde. Iedereen kan immers fietsen en door de afstelbare weerstand van de fiets kan iedere
        deelnemer op zijn of haar eigen niveau en intensiteit trainen.


        Ook kun je spinning gebruiken als training om volgend jaar de Alp d’Huez te beklimmen!

        Spinning biedt voor elk wat wils. Nog nooit kon je zoveel calorieën per tijdseenheid verbranden als bij
        spinning. Onder begeleiding van een gediplomeerd instructeur(ice) beleeft U een fietstocht in al zijn facetten.
        Het is dus niet alleen maar drie kwartier fietsen, maar alle facetten van spinning komen aan bod onder
        begeleiding van stimulerende muziek.</p>
@endsection


@section('footer')
    <p>Kickboksen voor volwassenen op donderdag en dinsdag om 19.00 uur! Zaterdag zaktraining om 10.00 uur. Onder
        gediplomeerde leiding! Ook voor de jeugd vanaf 6 jaar.</p>
@endsection


