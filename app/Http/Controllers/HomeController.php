<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Inertia\Inertia;

class HomeController extends Controller
{
    //

    // Accueil Page
    public function index() {
        $user = Auth::user();

        // return Inertia::render('Accueil',[
        //     'user' => $user,
        // ]);
    }

    // Login Page
    public function login(Request $request) {

        if(session('error')) session()->forget('error');

        $error = null;
        // if($error = session('error'))
        //     return Inertia::render('Login',[
        //         'error' => $error
        //     ]);
        // else
        //     return Inertia::render('Login');

    }

    // Register Page
    public function register() {

        if(session('error')) session()->forget('error');

        $error = null;
        // if($error = session('error1'))
        //     return Inertia::render('Register',[
        //         'error' => $error
        //     ]);
        // else
        //     return Inertia::render('Register');
    }

    public function createAccount(Request $request) {

        if(session('error1')) session()->forget('error1');

        $request->validate([
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'sexe' => 'required|string',
            'localite' => 'required|string',
            'statut' => 'required|string',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'password1' => 'required',
        ]);

        if($request->password != $request->password1) {

            session()->put('error1', 'Les mots de passe doivent �tre identique');
            return to_route('register');

        } else {
            User::create([
                'firstname' => $request->prenom,
                'lastname' => $request->nom,
                'sexe' => $request->sexe,
                'localite' => $request->localite,
                'statut' => $request->statut,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials);
            $request->session()->regenerate();

            return to_route('home');
        }
    }

    public function loginControl(Request $request) {

        if(session('error')) session()->forget('error');

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return to_route('/');
        }

        $user = User::find($request->email);

        if(!$user || !count($user)){
            session()->put('error', 'Mail ou mot de passe incorrect');
            return to_route('connexion');
        }


    }
}
