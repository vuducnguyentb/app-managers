<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;


class EmailController extends Controller
{
    public function sendEmail()
    {
        $emailJob = (new SendEmailJob())->delay(Carbon::now()->addSeconds(10));
        dispatch($emailJob);
        echo 'email sent';
    }
}

