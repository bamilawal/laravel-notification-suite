<?php

namespace Bamilawal\LaravelNotificationSuite\Notifications\Auth;

use Illuminate\Notifications\Messages\MailMessage;
use Bamilawal\LaravelNotificationSuite\Notifications\BaseNotification;

class EmailVerificationNotification extends BaseNotification
{
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Verify Your Email Address')
            ->from(
                config('laravel-notification-suite.mail.from_address'),
                config('laravel-notification-suite.mail.from_name')
            )
            ->view(
                'laravel-notification-suite::emails.auth.email-verification',
                array_merge($this->data, [
                    'user' => $notifiable,
                ])
            );
    }
}
