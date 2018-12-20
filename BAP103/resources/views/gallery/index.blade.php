 @extends ('layouts.master')



 @section('content')
     <h1>Photo Gallery</h1>
     @foreach($photos as $photo)
         <img src="{{asset('photos/'.$photo->photo)}}" alt="">
         @endforeach
     <a href="{{route('gallery.add_photo')}}" class="btn btn-success">uploaden</a>
 @endsection



