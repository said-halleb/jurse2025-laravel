<?php


namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Sponsor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KeynoteSpeaker;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function manageSponcor()
{
    $sponcors  = Sponsor::all();

    return view('manageSponcors', compact('sponcors'));
   
}
  public function manageMedia()
     {
         $photos = Photo::all();
    
         return view('manageMedia', compact('photos'));
     }
    
public function manageSpeaker(){
    $speakers=KeynoteSpeaker::all();
    return view ('manageSpeaker', compact('speakers'));

}

     public function addMedia(Request $request)
     {
       
         $request->validate([
             'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'alt' => 'required|string|max:255',
            
         ] );
      
         $path = $request->file('photo')->store('public/photos');
    
         $photo = Photo::create([
             'vpath' => Storage::url($path),
             'alt' => $request->alt,
             'title' => 'Photo Title', 
             'order' => 1, 
         ]);

         return redirect()->route('admin.manageMedia')->with('success', 'Photo added successfully');
     }

 public function updateMedia(Request $request, $id)
 {
     $request->validate([
         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         'alt' => 'required|string|max:255',
     ]);
 
     $photo = Photo::findOrFail($id);

     $photo->alt = $request->alt;

     if ($request->hasFile('photo')) {
         $path = $request->file('photo')->store('public/photos');
         $photo->vpath = Storage::url($path);
     }

     $photo->save();

     return redirect()->route('admin.manageMedia')->with('success', 'Photo updated successfully');
 }


 public function deleteMedia(Request $request, $id)
 {
     
     $photo = Photo::findOrFail($id);


     Storage::delete($photo->vpath);

     $photo->delete();

     return redirect()->route('admin.manageMedia')->with('success', 'Photo deleted successfully');
 }


 public function addSponcor(Request $request)
 {
     $request->validate([
         'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
         'alt' => 'required|string|max:255',
     ]);

     $path = $request->file('photo')->store('public/sponcors');

     $sponcor = Sponsor::create([
         'src' => Storage::url($path),
         'alt' => $request->alt,
         'order' => 1,
     ]);

     return redirect()->route('admin.manageSponcor')->with('success', 'Sponcor added successfully');
 }
 public function deleteSponcor(Request $request, $id){
     $sponcor = Sponsor::findOrFail($id);

     Storage::delete($sponcor->vpath);

     $sponcor->delete();

     return redirect()->route('admin.manageSponcor')->with('success', 'Photo deleted successfully');
 }
 public function updateSponcor(Request $request, $id)
 {
      $request->validate([
          'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
          'alt' => 'required|string|max:255',
      ]);
 
      $sponcor = Sponcor::findOrFail($id);

      $sponcor->alt = $request->alt;

      if ($request->hasFile('photo')) {
          $path = $request->file('photo')->store('public/sponcors');
          $sponcor->vpath = Storage::url($path);
      }

      $sponcor->save();

     return redirect()->route('admin.manageSponcor')->with('success', 'Photo updated successfully');
 }
 public function showOtherView()
 {
     $totalPhotos = Photo::count();
     $totalSponcor = Sponsor::count();
    $totalSpeaker= KeynoteSpeaker::count();
     return view('dashboard', compact('totalPhotos' ,'totalSponcor','totalSpeaker'));
 }

 public function addSpeaker(Request $request){
    $request->validate([
        
            'firstname'=>'required|nullable|string|max:255',
            'lastname'=>'required|nullable|string|max:255',
            'description'=>'required|string|max:255',
            'website'=>'string|max:255',
    ]);
    $speaker = KeynoteSpeaker::create(
        [
            'firstname'=> $request->firstname,
            'lastname'=>$request->lastname,
            'description'=>$request->description,
            'website' =>$request->website,
        ]
        );
        return redirect()->route('admin.manageSpeaker')->with('success', 'spaker added successfully');

}
public function deleteSpeaker(Request $request , $id){
$speakers = KeynoteSpeaker::findorfail($id);
$speakers -> delete();
return redirect()->route('admin.manageSpeaker')->with('success', 'speaker deleted successfully');

}
}

