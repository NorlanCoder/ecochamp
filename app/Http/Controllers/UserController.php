<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Activityjoin;
use App\Models\Alert;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $activities = Activite::where('user_id', "!=" , $user->id)->paginate(5);
        $alerts = Alert::where('user_id', $user->id)->paginate(5);
        $postes = Post::where('user_id', $user->id)->paginate(5);
        $joins = [];
        if($user){
            $activityJoins = Activityjoin::where('user_id', $user->id)->get();
            foreach ($activityJoins as $item)
            {
                array_push($joins, $item->activite->id);
                // dd($item->activite->id);
            }
            // dd($joins);
        }
        return view('pages.profil', compact('user', 'postes', 'activities', 'alerts', 'joins'));
    }

    public function show(string $id)
    {
        $user_auth = Auth::user();
        $user = User::where('id', $id)->firstorfail();
        $activities = Activite::where('user_id', "!=", $user->id)->paginate(5);
        $alerts = Alert::where('user_id', $user->id)->paginate(5);
        $postes = Post::where('user_id', $id)->paginate(5);
        $joins = [];
        if($user){
            $activityJoins = Activityjoin::where('user_id', $user->id)->get();
            foreach ($activityJoins as $item)
            {
                array_push($joins, $item->activite->id);
                // dd($item->activite->id);
            }
            // dd($joins);
        }
        return view('pages.profil', compact('user', 'user_auth', 'postes', 'activities', 'alerts', 'joins'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'sexe' => 'required',
            // 'phone' => 'required',
            // 'interventions'=> 'required', 
            // 'statut' => 'required',
            // 'accept' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|confirmed|min:8',
        ]);

        $user = User::where('id', $id)->firstorfail();
        $user->update([
            'firstname' => $request->prenom,
            'lastname' => $request->nom,
            'sexe' => $request->sexe,
            // 'phone' => $request->phone,
            // 'intervations' => $request->interventions,
            // 'statut' => $request->statut,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('status',"liked annuler!");
    }

    public function resetPassword(Request $request, string $id)
    {
        $request->validate([
            'token' => 'required',
            'oldPassword' => 'required|string|min:8',
            'password' => 'required|string|confirmed|min:8',
        ]);
        $user = User::where('id', $id)->firstorfail();
        $verify = Hash::check($request->oldPassword, $user->password);
        if(!$verify){
            return redirect()->back()->with('status',"password incorrect");
        }
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->back()->with('status',"modification password success");
    }
    
}
