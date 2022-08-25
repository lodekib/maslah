<?php

namespace App\Http\Controllers;

use App\Notifications\ContactUsNotification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function sendNotification(){
        $user = User::first();

        $contactusData = [
            'name' => 'Order Name',
            'body' => 'You received an order.',
            'thanks' => 'Thank you',
            'orderText' => 'Check out the order',
            'orderUrl' => url('/'),
            'order_id' => 006
        ];

        Notification::send($user,new ContactUsNotification($contactusData));
        dd('Task Completed');

    }
}
