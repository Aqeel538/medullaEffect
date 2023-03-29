<?php

namespace App\Http\Middleware;

use App\Models\Notification;
use App\Models\SeenNotification;
use Closure;
use Illuminate\Http\Request;

class CompanyNotificationsMiddleware
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
        $notifications = Notification::with('companyGet', 'dismissNotification')
            ->whereDoesntHave('dismissNotification', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })
            ->get();
        $getLastNotification = Notification::latest('id')->first('id');
        // dd($getLastNotification);
        $seenNotification = SeenNotification::where('notification_id', $getLastNotification->id)->where('user_id', auth()->user()->id)->first();
        if ($seenNotification != null) {
            $latestNotifications = Notification::where('id', '>', $seenNotification->id)->get();
        } else {
            $latestNotifications = Notification::get();
        }
        $countNotification = count($latestNotifications);

        $request->merge(['countNotifications' => $countNotification]);
        $request->merge(['getLastNotification' => $getLastNotification]);
        $request->merge(['notifications' => $notifications]);
        return $next($request);
    }
}
