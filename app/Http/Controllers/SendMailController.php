<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class SendMailController extends Controller
{
    public function sendmail(){
        $user = Auth::user();
        $mailable = new HelloMail($user);
        //to destination
        Mail::to('vuducnguyentb@gmail.com')->send($mailable);
        return;
    }
}
