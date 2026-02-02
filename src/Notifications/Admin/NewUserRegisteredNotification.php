<?php

namespace Bamilawal\LaravelNotificationSuite\Notifications\Admin;

use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Bamilawal\LaravelNotificationSuite\Notifications\BaseNotification;

class NewUserRegisteredNotification extends BaseNotification
{
    public function sendToAdmins(): void
    {
        Notification::route('mail', config('laravel-notification-suite.admin.emails'))
            ->notify($this);
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New User Registration')
            ->view(
                'laravel-notification-suite::emails.admin.new-user-registered',
                $this->data
            );
    }
}
