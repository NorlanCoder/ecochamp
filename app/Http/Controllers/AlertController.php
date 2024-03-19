<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use App\Models\Alertfollow;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jorenvh\Share\Share;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $page = "alert";
        $user = Auth::user();
        $alerts = Alert::paginate(15);
        $produits = Produit::orderByDesc('created_at')->paginate(5);
        $alert_user = [];
        $tags = [];
        if($user){
            $alert_user = Alert::where('user_id', $user->id)->paginate(15);
            $tags = DB::table('tags')->orderByDesc('id')->limit(5)->get();
        }

        return view('pages.alert', compact('user', 'alerts', 'page', 'alert_user', 'produits', 'tags'));
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
            // 'tags' => 'required',
        ]);
        // dd($request);
        if(!empty($request->image)){
            $imageName1 = $request->file('image')->store('public/images');
        }
        
        // if(!empty($request->image2)){
        //     $imageName2 = $request->file('image')->store('public/images');

        // }
        // dd($request);
        // $tags = explode("[,\s\-:]", $request->tags);
        $tags = [];
        // for ($i = 0; $i<5; $i++){
        //     if (!empty($request->btn_check_tag_1)){
        //         $besoin .= "Partenaire,";
        //     }
        //     btn-check-tag-{{$key}}
        // }
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
        $alert = Alert::create([
            'nom' => $request->nom,
            'date_remarque' => $request->debut,
            'image_principale' => isset($imageName1) ? $imageName1: "",
            // 'image2' => isset($imageName2) ? $imageName2: "",
            'description' => $request->description,
            'alert_type' => $request->type_alert,
            'interventions' => $request->interventions,
            'user_id' => $user->id,
        ]);
        // dd($alert);
        $alert->tag($tags);
        // dd($alert->tags);
        return response(
            [
                'success' => "Alert créée avec success!",
                "data" => $alert,
                "code" => 200
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
        $vus = [];
        if($user){
            $vus = Alertfollow::where("user_id", $user->id)->where("alert_id", $id)->get();
        }
        if($vus){
            foreach ($vus as $item){
                $item->delete();
            }
        }
        if($user){
            Alertfollow::create([
                'user_id' => $user->id, 
                'alert_id' => $id,
                'follow' => true,
            ]);
        }
        $alertfollows = Alertfollow::where('alert_id', $id)->paginate(20);

        $multipleSharingAlert = new Share();
        $multipleSharingAlert->page(url('/alert', $id), 'alert ecoChamp')
                ->facebook()
                ->whatsapp();

        return view('pages.alert_detail', compact('user', 'alert', 'alertfollows', 'multipleSharingAlert'));
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
