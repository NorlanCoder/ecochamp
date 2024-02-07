<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);
        $user = Auth::user();
        
        $request->validate([
            'comment' => 'required',
            'post_id' => 'required',
        ]);
        // dd($request);
        if(!empty($request->image)){
            $imageName1 = $request->file('image')->store('public/images');
        }
        
        Comment::create([
            'comment' => $request->comment,
            'post_id' => $request->post_id,
            'user_id' => $user->id,
        ]);

        return redirect()->back()->with('status',"Commentaire créé avec success!");
    }
    
}
