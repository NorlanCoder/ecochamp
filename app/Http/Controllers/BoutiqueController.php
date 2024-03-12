<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = "market";
        $user = Auth::user();
        $produits = Produit::paginate(15);
        $produit_suggestion = Produit::all();
        $produits_recent = Produit::all();
        $my_produits = [];
        if($user){
            $my_produits = Produit::where('user_id', $user->id)->paginate(15);
        }
        $categories = Categorie::all();
 
        return view('pages.boutique', compact('user', 'produits', 'categories', 'page', 'my_produits', 'produit_suggestion', 'produits_recent'));
    
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
        // $produit = Boutique::where('id', $id)->firstOrFail();
        return view('pages.produit_detail');
    
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
