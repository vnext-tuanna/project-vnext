<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendMailNotify extends Notification implements ShouldQueue
{
    use Queueable;
    private $mailNoti;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($mailNoti)
    {
        $this->mailNoti = $mailNoti;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Report System')
            ->line('Title: ' . $this->mailNoti['title'])
            ->line('Content: ' . $this->mailNoti['body'])
            ->action($this->mailNoti['mailText'], $this->mailNoti['url'])
            ->line($this->mailNoti['footer']);
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
            //
        ];
    }
}
