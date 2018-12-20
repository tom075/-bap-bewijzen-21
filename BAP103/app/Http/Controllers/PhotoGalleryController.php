<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoGalleryController extends Controller
{
    public function listPhotos(){

        $photos = Photo::all();

        return view('gallery.index',['photos' => $photos]);
    }
    public function showPhotoForm(){
        return view('gallery.add_photo_form');
    }
    public function SavePhotoForm(Request $request)
    {
       $validData = $request->validate([
            'title' => 'required',
            'description' => 'min:10',
           'photo' => 'required|image'
        ]);

        $targetFolder = public_path('photos');
        $fileName = str_random(16).'.'.$validData['photo']->getClientOriginalExtension();


        $validData['photo']->move($targetFolder, $fileName);

        $photo = new Photo();
        $photo->fill([
            'title' => $validData['title'],
            'description' => $validData['description'],
            'photo' => $fileName,
        ]);

        $photo->save();

        return redirect()->route('gallery.index');
    }


}
