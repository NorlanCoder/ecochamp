<?php

namespace App\Http\Controllers;

use App\Models\Post_liked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostLikedController extends Controller
{

    public function store(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return response(
                [
                    "action" => "liked",
                    'success' => "Connectez vous pour continuer",
                    'connect' => false,
                ]);
        }
        
        $request->validate([
            // 'spam' => 'required',
            'post_id' => 'required',
        ]);

        $liked = Post_liked::where("user_id", $user->id)->where("post_id", $request->post_id)->get();
        // dd($request);
        $count = Post_liked::where('post_id', $request->post_id)->count();

        if($liked){
            foreach ($liked as $item){
                $item->delete();
            }

            $count2 = Post_liked::where('post_id', $request->post_id)->count();
            
            if($count2 < $count){
                return response(
                    [
                        "like" => $count2,
                        "action" => "liked",
                        'success' => "like annulé!",
                        'connect' => true,
                    ]);
            }
        }

        Post_liked::create([
            // 'spam' => $request->spam,
            'user_id' => $user->id, 
            'post_id' => $request->post_id,
        ]);
        $count = Post_liked::where('post_id', $request->post_id)->count();

        return response(
            [
                "like" => $count,
                'success' => "liked!",
                "action" => "liked",
                'connect' => true,
            ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
