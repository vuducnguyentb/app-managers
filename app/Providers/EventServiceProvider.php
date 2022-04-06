<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\test;
use App\Listeners\testListener;
use function Illuminate\Events\queueable;
use Illuminate\Support\Facades\Log;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // Cách cách gọi Listener:
        // Event::listen(
        //     test::class, [testListener::class, 'handle']
        // ); // gọi bằng mảng
        // Event::listen(test::class, testListener::class); // gọi trực tiếp class
        Event::listen(queueable(function (test $event) {
            Log::info('hello');
        })); // khai báo trực tiếp function listener
    }
}
