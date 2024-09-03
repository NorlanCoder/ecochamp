<?php

namespace App\Http\Services;

use App\Models\Activite;
use App\Models\Alert;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AlgoService
{


    protected User $user;

    public function __construct()
    {
        if(Auth::user()){
            $this->user = User::where('id', Auth::user()->id)->first();
        }
        else{
            $this->user = new User();
        }
    }


    
}