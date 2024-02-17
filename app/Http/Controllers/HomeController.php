<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Photo;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Models\KeynoteSpeaker;

class HomeController extends Controller
{
    // Afficher tous les liens
    public function index()
    {
        $links = Link::all();
        $photos = Photo::all();
        $sponcors = Sponsor::all();
        $speakers =KeynoteSpeaker::all();
        return view('home.index', compact('links', 'photos', 'sponcors','speakers'));
    }
    

    // Afficher un lien par ID
    public function show($id)
    {
        $link = Link::find($id);
        return view('home.show', compact('link'));
    }

    // Afficher le formulaire d'ajout de lien
    public function create()
    {
        return view('home.create');
    }

    // Enregistrer un nouveau lien
    public function store(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        $validatedData = $request->validate([
            'href' => 'required|url',
        ]);

        Link::create($validatedData);

        return redirect()->route('home.index')->with('success', 'Link created successfully');
    }

    // Afficher le formulaire de mise à jour de lien
    public function edit($id)
    {
        $link = Link::find($id);
        return view('home.edit', compact('link'));
    }

    // Mettre à jour un lien
    public function update(Request $request, $id)
    {
        // Validez les données du formulaire si nécessaire
        $validatedData = $request->validate([
            'href' => 'required|url',
        ]);

        Link::whereId($id)->update($validatedData);

        return redirect()->route('home.index')->with('success', 'Link updated successfully');
    }

    // Supprimer un lien
    public function destroy($id)
    {
        Link::destroy($id);
        return redirect()->route('home.index')->with('success', 'Link deleted successfully');
    }
   

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process form submission (e.g., send email, save to database)
        Mail::to('rimjridimc@gmail.com')->send(new ContactFormSubmitted($validatedData));

        // Redirect back with success message
        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
}