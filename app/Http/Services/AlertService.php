<?php

namespace App\Http\Services;


use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AlertService
{


    protected User $user;

    public function __construct()
    {
        if(Auth::user()){
            $this->user = User::where('id', Auth::user()->id)->first();
        }
        {
            $this->user = new User();
        }
    }


    public function alerts(){
        
    }
    
}