<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
         /* 
        Validation
        */
        dd($request);
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'sexe' => 'required',
            'phone' => 'required',
            'interventions'=> 'required', 
            'statut' => 'required',
            'accept' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);



        /*
        Database Insert
        */
        $user = User::create([
            'firstname' => $request->prenom,
            'lastname' => $request->nom,
            'sexe' => $request->sexe,
            'phone' => $request->phone,
            'intervations' => $request->intervations,
            'statut' => $request->statut,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //dd($user);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
