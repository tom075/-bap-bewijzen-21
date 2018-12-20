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
                                   php */

Route::get('/', function () {
    return view('homepage');
//    return "homepage";
})->name('home')
;

Route::get('/sporten', function () {
    return view('sporten');
//    return "homepage";
})->name('sporten')
;

Route::get('/contact', function () {
    return view('contact');
//    return "homepage";
})->name('contact')
;

Route::get('/inschrijven', function () {
    return view('inschrijven');
//    return "homepage";
})->name('inschrijven')
;

Route::get('/nieuws', function () {
    return view('nieuws');
//    return "homepage";
})->name('nieuws')
;

Route::get('/photo-gallery', 'PhotoGalleryController@listPhotos')
    ->name('gallery.index');


Route::get('/photo-gallery/add-photo', 'PhotoGalleryController@showPhotoForm')
    ->name('gallery.add_photo');

Route::post('/photo-gallery/add-photo', 'PhotoGalleryController@SavePhotoForm')
    ->name('gallery.save_photo');


route::get('/test-sport', 'SportController@test');


Route::get('/artikel/{nummer}', 'ArticleController@show')
    ->where('nummer', '\d+')
    ->name('artikel.opnummer')
;









//Route::get('/test','TestController@test');


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
//Route::get('/nieuws/{nummer}', function ($nummer) {
//    return 'hier is artikel ' . $nummer;
//})
//    ->where('nummer' , '\d+')
//    ->name('artikel.show')
//;
//
//
//Route::get('/test/{naam}', function ($naam) {
//    return 'hier is artikel ' . $naam;
//})->where('naam' , '([a-zA-Z\-])+');


//$dataa = array('joey','carl');
//return $data;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
