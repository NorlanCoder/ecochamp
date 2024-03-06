<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Activityjoin;
use App\Models\Alert;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

// use Inertia\Inertia;

class HomeController extends Controller
{
    // Accueil Page
    public function index() {
        $page = "home";
        $user = Auth::user();
        $alerts = Alert::paginate(4);
        $postes = Post::paginate(4);
        $activities_campagne = Activite::where('activite_type', 'Campagne')->paginate(5);
        $activities_evenement = Activite::where('activite_type', 'Evénement')->paginate(5);
        $activities_activite = Activite::where('activite_type', 'Activite')->paginate(5);
        $joins = [];
        $tags = [];
        if($user){
            $activityJoins = Activityjoin::where('user_id', $user->id)->get();
            foreach ($activityJoins as $item)
            {
                array_push($joins, $item->activite->id);
                // dd($item->activite->id);
            }
            // dd($joins);
            $tags = DB::table('tagging_tags')->orderByDesc('id')->limit(5)->get();
        }
        $tendance = DB::table("tagging_tags")->where("count", ">=", 1)->orderByDesc("count")->limit(5)->get();
        // dd(DB::table("tagging_tags")->where("count", ">=", 1)->orderByDesc("count")->get());
        // dd($tendance);

        return view('layouts.index', compact('user', 'alerts', 'postes', 'activities_campagne',
         'activities_evenement', 'activities_activite', 'joins', 'page', 'tendance', 'tags'));
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


    public function search(Request $request){

        // $request->validate([
        //     'search' => 'required'
        // ]);

        $posts = Post::where("activite", 'LIKE', '%'.$request->search.'%')->paginate(2);
        $alerts = Alert::where("nom", 'LIKE', '%'.$request->search.'%')->paginate(2);
        $activites = Activite::where("nom", 'LIKE', '%'.$request->search.'%')->paginate(2);

        $search = [];
        if($posts){
            foreach($posts as $post){
                array_push($search, $post);
            }
        }

        if($alerts){
            foreach($alerts as $alert){
                array_push($search, $alert);
            }
        }

        if($activites){
            foreach($activites as $activite){
                array_push($search, $activite);
            }
        }
        // dd($search);
        return response([
            'success' => "true",
            "search" => $search,
        ]);
        
    }

    public function storage(String $filename) {
        $path = storage_path("app/public/images/".$filename);
        // $path = asset(Storage::url('app/public/images/'.$filename));
        // dd(file_exists($path));
        if (file_exists($path)) {
            // $data = file_get_contents($path);
            // $base64 = base64_encode($data);
            // dd(response()->file($path));
            return response()->file($path);
        } else {
            abort(404);
           // dd($path);
        }
    }

    public function ListTag(String $text){
        
        $tags = [];


        return response([
            'success' => "true",
            "tags" => $tags,
        ]);
    }
}
