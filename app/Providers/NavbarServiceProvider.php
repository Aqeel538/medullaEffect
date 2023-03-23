<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class NavbarServiceProvider extends ServiceProvider
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
        view()->composer('layouts.app', function ($view) {
            $view->with('myFunction', function ($countNotification) {

                $followedCompanies = User::where('id', auth()->user()->id)->with('followingCompanies.companyNotifications.dismissNotification')->first();

                $allNotification = [];
                // $countNotification = $allNotification[]->count;
                foreach ($followedCompanies['followingCompanies'] as $followedCompany) {

                    foreach ($followedCompany['companyNotifications'] as $notifications) {

                        if ($notifications['dismissNotification']->where('user_id', auth()->user()->id)->first()) {
                        } else {
                            $allNotification[] = $notifications;
                        }
                        // }

                    }
                }
                $countNotification = count($allNotification);








                return 'Result: ' . $param;
            });
        });
    }
}
