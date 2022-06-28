<?php

namespace App\Providers;

use App\Listeners\SetRestaurantIdInSession;
use App\Events\ServiceHoursEvent;
use App\Listeners\ServiceHoursListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        Login::class => [
            SetRestaurantIdInSession::class
        ],
        ServiceHoursEvent::class => [
            ServiceHoursListener::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {

    }
}
