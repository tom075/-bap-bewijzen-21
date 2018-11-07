<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($nummer){
        return view('artikel', [
           'id' => $nummer,
            'text' => 'Er zijn geen jeugdlessen van maandag 22 oktober t/m 27 oktober. Vrijdag 19 oktober trainen de D en C selectie om 18.00 uur en de B en A selectie om 19.15 uur. Zaterdag 20 oktober gaan de lessen op het Blooksven gewoon door.
'           , 'titel' => 'Herfstvakantie!'
            , 'image' => asset('afb/judo.jpg')
        ]);
    }
}
