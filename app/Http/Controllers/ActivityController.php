<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Activityjoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = "activite";
        $user = Auth::user();
        $activities_sugestion = Activite::where('debut', '>=', date('Y-m-d H:i:s'))->orderby('debut', 'desc')->paginate(10);
        $activities_pop = Activite::where('debut', 'desc')->paginate(10);
        // dd($activities_pop);
        $activities_campagne = Activite::where('activite_type', 'Campagne')->get();
        $activities_evenement = Activite::where('activite_type', 'Evénement')->get();
        $activities_activite = Activite::where('activite_type', 'Activite')->get();

        $joins = [];
        $activities_my = [];
        if($user){
            $activityJoins = Activityjoin::where('user_id', $user->id)->get();
            foreach ($activityJoins as $item)
            {
                array_push($joins, $item->activite->id);
                // dd($item->activite->id);
            }
            // dd($joins);
            $activities_myactivityJoins = Activite::where('user_id', $user->id)->paginate(10);
        }

        return view('pages.activity', compact('user', 'activities_campagne', 'activities_evenement', 'activities_activite', 'activities_pop', 'activities_sugestion', 'activities_my', 'page', 'joins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**join
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
            $besoin .= "Partenaire,";
        }
        if (!empty($request->benevolat)){
            $besoin .= "Bénévolat,";
        }
        if (!empty($request->sponsor)){
            $besoin .= "Sponsor,";
        }
        if (!empty($request->participant)){
            $besoin .= "Participant,";
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
        $user = Auth::user();
        $activite = Activite::where('id', $id)->firstOrFail();

        list($annee, $mois, $jour) = explode('-', $activite->debut); 
        
        $besoin = preg_split('/\s*,\s*/', $activite->besoin);
        // dd($besoin);
        $participant = Activite::where('id', $id)->firstOrFail()->activityJoins->where("participation", "!=", "");
        
        $user_joint = [];
        $est = [];
        if($user){
            $user_joint = Activite::where('id', $id)->first()->activityJoins->where("user_id", $user->id)->first();
            if($user_joint)$est = preg_split('/\s*,\s*/', $user_joint->participation);
        }
        return view('pages.activite_detail', compact('user', 'activite', 'jour', 'besoin', "participant", "user_joint", 'est'));
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
