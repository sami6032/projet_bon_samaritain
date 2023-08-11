<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProduitController extends Controller
{
    public function ajoutproduit()
    {
        $categories = category::all();
        return view('ajoutproduit',compact('categories'));
    }
    
    public function edit($id)
    {
        $categories = category::all();
        $produit = produit::find($id);
        return view('produit.editProduit', compact('produit','categories'));
    }
    public function update(Request $request , $id)
    {
         $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'photo' =>'required'
            
            // autres règles de validation pour les champs
        ]);
       
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('public/picture');
            $name = explode('/', $photo)[2];
            $input['photo'] = $name;
        };

        produit::find($id)->update([
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'description'=>$request->description,
            'photo'=>$name,
            'category_id'=>$request->category_id
        ]);

        return redirect('accueil');
    }


    public function produit()
    {
        $produits = produit::all();
        return view('produit',compact('produits'));
    }
    public function welcome()
    {
        
        $produits = produit::paginate(5);
        return view('welcome',compact('produits'));
    }

    public function storeproduit(Request $request)
    {
  
        $request->validate([
            'nom' => 'required|string',
            'prix' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string',
            'category' => 'required|string',
        ]);
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('public/picture');
            $name = explode('/', $photo)[2];
            $input['photo'] = $name;
        };

             produit::create([
            'nom'=> $request->nom,
            'prix'=>$request->prix,
            'photo'=>$name,
            'description'=>$request->description,
            'category_id'=> $request->category,
            // 'user_id'=> Auth::user()->id,
        ]);
        return redirect('accueil');
    }
  

    public function destroy( $id)
    {
        produit::find($id)->delete();

        return redirect()->route('accueil')->with('success', 'Utilisateur supprimé avec succès');
    }

}


