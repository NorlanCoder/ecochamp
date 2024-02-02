<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;


class SendMailController extends Controller
{
  
    
    public function store(ContactRequest $request)
    {
        Mail::to('administrateur@chezmoi.com')
            ->send(new Contact($request->except('_token')));
        return view('confirm');
    }
    
}
