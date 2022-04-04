<?php

namespace App\Listeners;

use App\Events\test;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class testListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\test  $event
     * @return void
     */
    public function handle(test $event)
    {
        // Log::info('Hello'); // Ghi sự kiện vào file storage/logs/laravel.log
        Log::info('Hello: '.$event->name); //$event->name: lấy tham số bên Event truyền vào listener
    }
}
