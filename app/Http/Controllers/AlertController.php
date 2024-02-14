<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use App\Models\Alertfollow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = "alert";
        $user = Auth::user();
        $alerts = Alert::paginate(15);
        return view('pages.alert', compact('user', 'alerts', 'page'));
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
            'type_alert' => 'required',
            'interventions' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // dd($request);
        if(!empty($request->image)){
            $imageName1 = $request->file('image')->store('public/images');
        }
        
        // if(!empty($request->image2)){
        //     $imageName2 = $request->file('image')->store('public/images');

        // }
        // dd($request);
        Alert::create([
            'nom' => $request->nom,
            'date_remarque' => $request->debut,
            'image_principale' => isset($imageName1) ? $imageName1: "",
            // 'image2' => isset($imageName2) ? $imageName2: "",
            'description' => $request->description,
            'alert_type' => $request->type_alert,
            'interventions' => $request->interventions,
            'user_id' => $user->id,
        ]);

        return redirect()->back()->with('status',"Alert créée avec success!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::user();
        $alert = Alert::where('id', $id)->firstorfail();

        $vus = Alertfollow::where("user_id", $user->id)->where("alert_id", $id)->get();

        if($vus){
            foreach ($vus as $item){
                $item->delete();
            }
        }

        Alertfollow::create([
            'user_id' => $user->id, 
            'alert_id' => $id,
        ]);

        return view('pages.alert_detail', compact('user', 'alert'));
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
