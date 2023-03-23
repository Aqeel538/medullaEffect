<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class NotificationsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $allNotification = [];
        $countNotification = 0;

        if (auth()->check()) {
            $followedCompanies = User::where('id', auth()->user()->id)->with('followingCompanies.companyNotifications.dismissNotification')->first();

            $allNotification = [];

            foreach ($followedCompanies['followingCompanies'] as $followedCompany) {
                foreach ($followedCompany['companyNotifications'] as $notifications) {
                    if ($notifications['dismissNotification']->where('user_id', auth()->user()->id)->first()) {
                    } else {
                        $allNotification[] = $notifications;
                    }
                }
            }
        }

        $countNotification = count($allNotification);

        $request->merge(['countNotifications' => $countNotification]);
        return $next($request);
    }
}
