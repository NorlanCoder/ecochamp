<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use App\Models\CommentsActivities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsActivitiesController extends Controller
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
            'activite_id' => 'required',
        ]);
        // dd($request);
        if(!empty($request->image)){
            $imageName1 = $request->file('image')->store('public/images');
        }
        
        $comment = CommentsActivities::create([
            'comment' => $request->comment,
            'activite_id' => $request->activite_id,
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
    
    }

    /**
     * Display the specified resource.
     */
    public function show(CommentsActivities $commentsActivities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommentsActivities $commentsActivities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommentsActivities $commentsActivities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommentsActivities $commentsActivities)
    {
        //
    }
}
