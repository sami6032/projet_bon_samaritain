<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index',compact('users'));
    }
   
    
    // public function events()
    // {
    //     $reservations = reservation::all();
    //     return view('events',compact('reservations'));
    // }


    public function showPage()
{
    // Vérifier si le bouton a été cliqué (variable de session définie)
    $buttonClicked = Session::get('button_clicked', false);

    // Effacer la variable de session pour qu'elle ne reste pas active après ce clic
    Session::forget('button_clicked');

    return view('events', ['buttonClicked' => $buttonClicked]);
}

}