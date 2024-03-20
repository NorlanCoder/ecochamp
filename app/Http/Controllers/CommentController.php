<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sail\Console\AddCommand;

class CommentController extends Controller
{
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
                    'code' => 401
                ]);
        }
        
        $request->validate([
            'comment' => 'required',
            'post_id' => 'required',
        ]);
        // dd($request);
        if(!empty($request->image)){
            $imageName1 = $request->file('image')->store('public/images');
        }
        
        $comment = Comment::create([
            'comment' => $request->comment,
            'post_id' => $request->post_id,
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
                'code' => 200
            ]);
            // json_encode()
        // return redirect()->back()->with('status',"Commentaire créé avec success!");
    }
    
}
