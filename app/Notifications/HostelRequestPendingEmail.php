<?php

namespace App\Notifications;

use App\Models\Hostel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HostelRequestPendingEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Hostel $hostel )
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Hostel Request Received')
            ->greeting('Hello ' . $notifiable->name . ',')
            ->line('Thank you for submitting your hostel.')
            ->line('Your request is currently under review by our team.')
            ->line('⏳ This process may take up to **24 hours**.')
            ->line('You will be notified by email once your request is approved.')
            ->line('Please make sure to verify your email address if you haven’t already.')
            ->salutation('— ' . config('app.name'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
