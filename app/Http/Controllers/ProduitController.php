<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $user = Auth::user();

        $request->validate([

            'nom' => 'required',
            'description' => 'required',
            'devise' => 'required',
            // 'symbole_devise' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'target' => 'required',
            'user_id' => 'required',
            'categorie_id' => 'required',

        ]);

        if(!empty($request->image)){

            $imageName = $request->file('image')->store('public/images');
        }
    
        $tags = [];

        if (!empty($request->btn_check_tag_0)){
            array_push($tags, $request->btn_check_tag_0);
        }
        if (!empty($request->btn_check_tag_1)){
            array_push($tags, $request->btn_check_tag_1);
        }
        if (!empty($request->btn_check_tag_2)){
            array_push($tags, $request->btn_check_tag_2);
        }
        if (!empty($request->btn_check_tag_3)){
            array_push($tags, $request->btn_check_tag_3);
        }
        if (!empty($request->btn_check_tag_4)){
            array_push($tags, $request->btn_check_tag_4);
        }

        $produit = Produit::create([
            'nom' => $request->nom,
            'description' => $request->description,
            // 'tags' => $request->nom,
            'devise' => $request->devise,
            // 'symbole_devise' => $request->nom,
            'price' => $request->price,
            'image' => isset($imageName) ? $imageName: "",
            'target' => $request->target,
            'user_id' => $user->id,
            'categorie_id' => $request->categorie_id,
        ]);
        $produit->tag($tags);
        return response(
            [
                'success' => "Produit créé avec success!",
                "data" => $produit,
            ]);
        return redirect()->back()->with('status',"Produit créé avec success!");
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
