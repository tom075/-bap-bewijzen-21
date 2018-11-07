<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){

        $drivers = \DB::table('drivers')
            ->orderBy('total_points', 'desc')
            ->get();


        $bestDriver = \DB::table('drivers')
            ->where('total_points', '>', 222)
            ->first();


//        $result = \DB::table('drivers')
//            ->insert(
//                [
//                    'team' => 'mercedes',
//                    'firstname' => 'Louis',
//                    'lastname' => 'Hemmelton',
//                    'total_points' => 555,
//                    'birthdate' => '1963-12-31'
//                ]
//            );



        dd($drivers);


    }
}
