<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer('*', function ($view) {
        //     $count = Notification::where('user_id', auth()->user()->id)->count();
        //     $view->with('count', $count);
        // });
    }
}
