<?php

namespace App\Http\Middleware;

use App\Models\Notification;
use App\Models\SeenNotification;
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

        $response = 0;
        $allNotification = [];
        $countNotification = 0;
        $seenNoti = [];
        if (auth()->check()) {
            $followedCompanies = User::where('id', auth()->user()->id)->with('followingCompanies.companyNotifications.dismissNotification')->first();

            $allNotification = [];

            foreach ($followedCompanies['followingCompanies'] as $followedCompany) {
                $companyNotifications = $followedCompany['companyNotifications'];
                // if ($companyNotifications->dismissNotification->where('user_id', auth()->user()->id)->first()) {
                // } else {
                // Filter out any notifications that have been seen
                $unseenNotifications = $companyNotifications->reject(function ($notification) {
                    return $notification['seenNotification']->contains('user_id', auth()->user()->id);
                });

                // Add the remaining notifications to $allNotification
                $allNotification = array_merge($allNotification, $unseenNotifications->toArray());
                // }
            }
        }

        $countNotification = count($allNotification);
        // dd($companyNotifications);
        $request->merge(['countNotifications' => $countNotification]);
        return $next($request);









        // $response = 0;
        // $allNotification = [];
        // $countNotification = 0;
        // $seenNoti = [];
        // if (auth()->check()) {
        //     $followedCompanies = User::where('id', auth()->user()->id)->with('followingCompanies.companyNotifications.dismissNotification')->first();

        //     $allNotification = [];

        //     foreach ($followedCompanies['followingCompanies'] as $followedCompany) {
        //         foreach ($followedCompany['companyNotifications'] as $notifications) {
        //             if ($notifications['dismissNotification']->where('user_id', auth()->user()->id)->first()) {
        //             } else {
        //                 foreach ($notifications['seenNotification'] as $seenNotifications) {
        //                     if ($seenNotifications->where('user_id', auth()->user()->id)->first()) {

        //                         // $user_id = auth()->user()->id;
        //                         $checkNotification = Notification::where('id', '!=', $seenNotifications->notification_id)->first();
        //                         // if ($checkNotification) {
        //                         // } else {
        //                         //     // $isSeen = new SeenNotification();

        //                         //     // $isSeen->user_id = auth()->user()->id;
        //                         //     // $isSeen->notification_id = $notifications->id;
        //                         //     // $data = $isSeen->save();
        //                         // }



        //                         // $response = Notification::where('id', $notifications->id)->with('seenNotification', function ($query) {
        //                         //     $query->where('user_id', '=', auth()->user()->id);
        //                         // })->count();

        //                         // if (isset($response['seenNotification'][0]) && !empty($response['seenNotification'][0])) {
        //                         //     $response['seenNotification'][0];
        //                         // } else {
        //                         // }
        //                         $seenNoti[] = $response;
        //                         $allNotification[] = $checkNotification;
        //                     }
        //                 }
        //             }
        //         }
        //     }
        // }
        // $countSeenNoti = count($seenNoti);
        // dd($allNotification);
        // $count = count($allNotification);
        // $countNotification = $count - $countSeenNoti;

        // $request->merge(['countNotifications' => $countNotification]);
        // return $next($request);
    }
}
