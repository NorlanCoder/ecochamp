<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Inertia\Inertia;

class UserController extends Controller
{
    //
    // public function show() {
    //     $user = User::all();
    //     return Inertia::render('User/Show');
    // }

    public function profile()
    {
        $user = Auth::user();
        // $activities = Activite::where($user->id)->paginate(15);
        // $postes = Posts::where($user->id)->paginate(15);
        return view('pages.profil', compact('user'));
    }

    public function show(string $id)
    {
        $user = User::where('id', "=", $id);

        return view('pages.profil', compact('user'));
    }
    
}
