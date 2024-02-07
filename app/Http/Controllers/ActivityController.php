<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $activities = Activite::paginate(15);
        return view('pages.activity', compact('user', 'activities'));
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
        // dd($request);
        $user = Auth::user();

        $request->validate([
            'nom' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'description' => 'required',
            'activite_type' => 'required',
            'interventions' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if(!empty($request->image)){
            // $imageName = $request->file('image')->getClientOriginalName();  
            
            $imageName = $request->file('image')->store('public/images');
        }
        
        $besoin = "";
        if (!empty($request->partenaire)){
            $besoin .= "partenaire,";
        }
        if (!empty($request->benevolat)){
            $besoin .= "bénévolat,";
        }
        if (!empty($request->sponsor)){
            $besoin .= "sponsor,";
        }
        if (!empty($request->participant)){
            $besoin .= "participant,";
        }
        // dd($besoin);
         $activite = Activite::create([
            'nom' => $request->nom,
            'debut' => $request->debut,
            'fin' => $request->fin,
            'couverture' => isset($imageName) ? $imageName: "",
            'description' => $request->description,
            'activite_type' => $request->activite_type,
            'besoin' => $besoin,
            'interventions' => $request->interventions,
            'user_id' => $user->id,
        ]);
        //dd($activite);
        return redirect()->back()->with('status',"Activité créée avec success!");
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
