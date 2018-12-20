<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function test(){
        $sport = new \App\Sport();
        $sport->sport = 'judo';
        $sport->omschrijving = 'test';

        $sport->save();

        return view('/inschrijven');

    }
}
