<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use App\Models\Post;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Services\PostService;
use App\Models\User;

class PostController extends Controller
{

    protected PostService $postService;
    protected User $user;

    public function __construct()
    {
        if(Auth::user()){
            $this->user = User::where('id', Auth::user()->id)->first();
        }else{
            $this->user = new User();
        }
        $this->postService = new PostService();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'post';
        $user = $this->user;
        $alerts = Alert::paginate(5);
        $postes = $this->postService->postes();
        $produits = Produit::orderByDesc('created_at')->limit(5)->get();
        $tendance = DB::table("tagging_tags")->where("count", ">=", 1)->orderByDesc("count")->limit(5)->get();
        $tags = [];
        if($this->user->id){
            $tags = DB::table('tags')->orderByDesc('id')->limit(5)->get();
        }
        return view('pages.post', compact('user', 'alerts', 'postes', 'page', 'tendance', 'produits', 'tags'));

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
        
        $request->validate([
            'activite' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        $post = Post::create([
            'activite' => $request->activite,
            'description' => $request->description,
            'image1' => $imageName,
            'user_id' => $this->user->id,
        ]);
        $post->tag($tags);
        return response(
            [
                'success' => "Poste créé avec success!",
                "data" => $post,
                "request" => $request,
                "code" => 200
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
