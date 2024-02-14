<?php

namespace App\Http\Controllers;

use App\Models\Activityjoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityjoinController extends Controller
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
            'activite_id' => 'required',
        ]);
        // dd($besoin);
        if(!$user){
            return response(
                [
                    "action" => "joinActivity",
                    'success' => "Connectez vous pour rejoindre l'activité",
                    'connect' => false,
                ]);
            // return redirect()->back()->with(
            //     "status", "Connectez vous pour rejoindre l'activité");
        }
        $rejoint = Activityjoin::where("user_id", $user->id)->where("activite_id", $request->activite_id)->get();
        // dd($liked);
        if($rejoint){
            foreach ($rejoint as $item){
                $item->delete();
            }
            // return redirect()->back()->with('status',"liked annuler!");
        }
    
        $joint = Activityjoin::create([
            'activite_id' => $request->activite_id,
            'user_id' => $user->id,
            'interested' => true,
            // 'participation' => 'Participant',
        ]);
        // dd($joint);
        return response(
            [
                "action" => "joinActivity",
                'success' => "activite jointe!",
                'connect' => true,
            ]);
        // return redirect()->back()->with([
        //     "status" => "Vous avez rejoint l'activité avec success!",
        //     'success' => 'liked success'
        // ]);
    }

    public function devenir(Request $request){

        $user = Auth::user();

        if(!$user){
            return response(
                [
                    "action" => "devenirActivity",
                    'success' => "Connectez vous pour continuer",
                    'connect' => false,
                ]);
        }

        $request->validate([
            'activite_id' => 'required',
        ]);
        // dd($request);
        $joint = Activityjoin::where("user_id", $user->id)->where("activite_id", $request->activite_id)->firstorfail();

        // dd($joint);
        $besoin = "";
        if (!empty($request->Partenaire)){
            $besoin .= "Partenaire,";
        }
        if (!empty($request->Bénévolat)){
            $besoin .= "Bénévolat,";
        }
        if (!empty($request->Sponsor)){
            $besoin .= "Sponsor,";
        }
        if (!empty($request->Participant)){
            $besoin .= "Participant,";
        }

        $joint->update([
            'participation' => $besoin,
        ]);
        // dd($joint);
        return response(
            [
                'participation' => $joint->participation,
                "action" => "devenirActivity",
                'success' => "Partitipation à l'activité!",
                'connect' => true,
            ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Activityjoin $activityjoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activityjoin $activityjoin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activityjoin $activityjoin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activityjoin $activityjoin)
    {
        //
    }
}
