<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'post';
        $user = Auth::user();
        $alerts = Alert::paginate(5);
        $postes = Post::paginate(5);
        $tendance = DB::table("tagging_tags")->where("count", ">=", 1)->orderByDesc("count")->limit(5)->get();
        //dd($postes[2]->postLikeds);
        return view('pages.post', compact('user', 'alerts', 'postes', 'page', 'tendance'));

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
            'activite' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
        ]);
        
        if(!empty($request->image)){
            // $imageName = $request->file('image')->getClientOriginalName();  
            
            $imageName = $request->file('image')->store('public/images');
        }
        
        $tags = explode("[,\s\-:]", $request->tags);
        $post = Post::create([
            'activite' => $request->activite,
            'description' => $request->description,
            'image1' => $imageName,
            'user_id' => $user->id,
        ]);
        $post->tag($tags);

        return response(
            [
                'success' => "Poste créé avec success!",
                "data" => $post,
            ]);

        return redirect()->back()->with('status',"Poste créé avec success!");

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
