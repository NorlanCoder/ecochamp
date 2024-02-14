<?php

namespace App\Http\Controllers;

use App\Models\alertComment;
use App\Models\CommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlertCommentController extends Controller
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
        //dd($request);
        $user = Auth::user();

        if(!$user){
            return response(
                [
                    "action" => "addComment",
                    'success' => "Connectez vous pour continuer",
                    'connect' => false,
                ]);
        }
        
        $request->validate([
            'comment' => 'required',
            'alert_id' => 'required',
        ]);
        // dd($request);
        if(!empty($request->image)){
            $imageName1 = $request->file('image')->store('public/images');
        }
        
        $comment = alertComment::create([
            'comment' => $request->comment,
            'alert_id' => $request->post_id,
            'user_id' => $user->id,
        ]);
        $addComment = new CommentModel();
        $addComment->setComment($comment);
        $addComment->setUser($comment->user);
        return response(
            [
                "action" => "addComment",
                'success' => "commenté",
                "comment" => $addComment,
                'connect' => true,
            ]);
            // json_encode()
        // return redirect()->back()->with('status',"Commentaire créé avec success!");
    }

    /**
     * Display the specified resource.
     */
    public function show(alertComment $alertComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alertComment $alertComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alertComment $alertComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alertComment $alertComment)
    {
        //
    }
}
