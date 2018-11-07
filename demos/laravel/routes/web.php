<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
//    return "homepage";
})->name('home')
;


Route::get('/test','TestController@test');

;


Route::get('/artikel/{nummer}', 'ArticleController@show')
    ->where('nummer', '\d+')
    ->name('artikel.opnummer')
;











//Route::get('/hoi', function () {
//        return view('home');
//});
//
//Route::get('/pinda', function () {
////    return "pinda";
//    $data = array('joey','carl');
//    return $data;
//});
//
Route::get('/pagina/{nummer}', function ($nummer) {
    return 'hier is artikel ' . $nummer;
})
    ->where('nummer' , '\d+')
    ->name('artikel.show')
;
//
//
//Route::get('/test/{naam}', function ($naam) {
//    return 'hier is artikel ' . $naam;
//})->where('naam' , '([a-zA-Z\-])+');


//$dataa = array('joey','carl');
//return $data;
