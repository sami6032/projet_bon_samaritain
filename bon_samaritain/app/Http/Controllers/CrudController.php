<?php

namespace App\Http\Controllers;
use App\Models\crud;
use App\Models\User;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function index()
{
    $users = User::all(); // Récupère tous les enregistrements de la table "cruds"

    return view('index', compact('users'));
}

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_de_naissance' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048', // règles de validation pour le champ de la photo
            // autres règles de validation pour les champs
        ]);
    
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('photos', 'public'); // Déplace la photo vers le dossier 'storage/app/public/photos' (assurez-vous que le lien symbolique est configuré correctement)
            $validatedData['photo'] = $photoPath;
        }

        User::create($validatedData);

        return redirect()->route('index')->with('success', 'Utilisateur ajouté avec succès');
    }

    public function edit(User $crud)
    {
        return view('crud.edit', compact('crud'));
    }

    public function update(Request $request, User $crud)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_de_naissance' => 'required',
            // autres règles de validation pour les champs
        ]);

        $crud->update($validatedData);

        return redirect()->route('index')->with('success', 'Utilisateur mis à jour avec succès');
    }

    public function destroy(User $crud)
    {
        $crud->delete();

        return redirect()->route('index')->with('success', 'Utilisateur supprimé avec succès');
    }
}
