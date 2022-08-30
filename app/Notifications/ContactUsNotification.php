<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsNotification extends Notification
{
    use Queueable;
    private $contactusData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contactusData)
    {
        $this->contactusData = $contactusData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'name' => $this->contactusData['name'],
            'phone' => $this->contactusData['phone'],
            'email' => $this->contactusData['email'],
            'message' => $this->contactusData['message']
        ];
    }




}
