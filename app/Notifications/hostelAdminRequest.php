<?php

namespace App\Notifications;

use App\Models\Hostel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HostelAdminRequest extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    public function __construct(public Hostel $hostel)
    {
        // $this->hostel = $hostel;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable)
    {
        // return (new MailMessage)
        //     ->line('The introduction to the notification.')
        //     ->action('Notification Action', url('/'))
        //     ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'hostel_request',

            'hostel_id'     => $this->hostel->id,
            'hostel_name'   => $this->hostel->name,
            'hostel_status' => $this->hostel->status,

            'user_id'       => $this->hostel->owner->id,
            'user_name'     => $this->hostel->owner->name,
            'user_email'    => $this->hostel->owner->email,
            'email_verified' => (bool) $this->hostel->owner->email_verified_at,

            'requested_at'  => now(),
        ];
    }
}
