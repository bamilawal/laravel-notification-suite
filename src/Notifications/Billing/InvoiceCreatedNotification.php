<?php

namespace Bamilawal\LaravelNotificationSuite\Notifications\Billing;

use Illuminate\Notifications\Messages\MailMessage;
use Bamilawal\LaravelNotificationSuite\Notifications\BaseNotification;

class InvoiceCreatedNotification extends BaseNotification
{
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Invoice Generated')
            ->view(
                'laravel-notification-suite::emails.billing.invoice-created',
                array_merge($this->data, [
                    'user' => $notifiable,
                ])
            );
    }
}
