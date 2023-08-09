<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\role;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB ;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registerAdmin()
    {
        return view('registerAdmin');
    }

    public function registerGerant()
    {
        return view('registerGerant');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
    if (Auth::attempt($credentials) && Auth::user()->role_id === 1) {
        $request->session()->regenerate();
        return redirect()->intended('accueil');
    } elseif(Auth::attempt($credentials)&& Auth::user()->role_id === 2){
        $request->session()->regenerate();
        return redirect()->intended('accueil');
    } 
    
   

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records'
        ])->onlyInput('email');
}



    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('index');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }

    public function storeAdmin(Request $request)
    {
  
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|string',
            'confirmer_password' => 'required|same:password',  
        ]);

             User::create([
            'nom'=> $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'role_id'=> 1,
        ]);
        return redirect('login');
    }

    public function storeGerant(Request $request)
    {
  
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|string',
            'confirmer_password' => 'required|same:password',
            
            
        ]);

             User::create([
            'nom'=> $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'role_id'=> 2,
        ]);
        return redirect('login');
    }

    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('login');
    }
   
}