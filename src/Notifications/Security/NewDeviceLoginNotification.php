<?php

namespace Bamilawal\LaravelNotificationSuite\Notifications\Security;

use Illuminate\Notifications\Messages\MailMessage;
use Bamilawal\LaravelNotificationSuite\Notifications\BaseNotification;

class NewDeviceLoginNotification extends BaseNotification
{
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Device Login Detected')
            ->view(
                'laravel-notification-suite::emails.security.new-device-login',
                array_merge($this->data, [
                    'user' => $notifiable,
                ])
            );
    }
}
