<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;
use App\Notifications\PanierPaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = "market";
        $user = Auth::user();
        $user = User::where('id', $user->id)->frist();
        $produits = Produit::paginate(15);
        $produit_suggestion = Produit::all();
        $produits_recent = Produit::all();
        $produits_all = Produit::orderByDesc('created_at')->paginate(15);
        $my_produits = [];
        if($user){
            $my_produits = Produit::where('user_id', $user->id)->paginate(15);
        }
        $categories = Categorie::all();

 
        $user->notify(new PanierPaid());
 
        return view('pages.boutique', compact('user', 'produits', 'categories', 'page', 'my_produits', 'produit_suggestion', 'produits_recent', 'produits_all'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        $user = Auth::user();
        $produit = Produit::where('id', $id)->first();
        $produits = Produit::paginate(15);
        $tags = [];
        if($user){
            $tags = DB::table('tags')->orderByDesc('id')->limit(5)->get();
        }
        return view('pages.produit_detail', compact('user', 'produit', 'produits', 'tags'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
