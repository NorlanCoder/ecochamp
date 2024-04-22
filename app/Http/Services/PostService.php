<?php

namespace App\Http\Services;


use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AlgService
{


    protected User $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }


    public function list_postes(){
        
    }
    
}