<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class HomeController extends Controller
{
    // Afficher tous les liens
    public function index()
    {
        $links = Link::all();
        return view('home.index', compact('links'));
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
}