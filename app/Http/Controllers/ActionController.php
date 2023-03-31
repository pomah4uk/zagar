<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class ActionController extends Controller
{
    public function send(Request $request){
        $email = $request->input('email');
        Mail::to('krasnovairiska@gmail.com')->send(new SendMail($email));
    }
}