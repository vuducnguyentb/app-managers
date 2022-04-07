<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function GetSendEmail()
    {
        $user = User::find(2);
        $mailable = new TestMail($user);
        Mail::to("hai.creativeviet@gmail.com")->send($mailable);
        // dd($user);
    }
    // public function PostSendMail()
    // {
        
    // }
}
