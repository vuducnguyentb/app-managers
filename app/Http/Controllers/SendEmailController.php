<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMailForDues;

class SendEmailController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSendEmail()
    {
        return view('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postSendEmail(Request $request)
    {
    //chuyển thời gian về giây.
        // $time = $request->time * 60 * 60;
        for ($i = 0; $i < $request->amount; $i++) {
            dispatch(new SendMailForDues($request->all()));
        }
        return redirect()->back();
    }
}

