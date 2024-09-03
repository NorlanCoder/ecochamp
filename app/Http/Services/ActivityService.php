<?php

namespace App\Http\Services;


use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ActivityService
{


    protected User $user;

    public function __construct()
    {
        if(Auth::user()){
            $this->user = User::where('id', Auth::user()->id)->first();
        }else
        {
            $this->user = new User();
        }
    }


    public function activites(){
        
    }
    
}