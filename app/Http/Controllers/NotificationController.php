<?php

namespace App\Http\Controllers;

use App\Notifications\ContactUsNotification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function sendNotification(Request $request){

        $user = User::first();

        $contactusData = $request->all();

        if(Notification::send($user,new ContactUsNotification($contactusData))){
            return back()->with('success','Message sent successfully');

        }else{
            return back()->with('error','Unable to send your message');

        }


    }
}
