<?php

namespace Bamilawal\LaravelNotificationSuite\Notifications\Payments;

use Illuminate\Notifications\Messages\MailMessage;
use Bamilawal\LaravelNotificationSuite\Notifications\BaseNotification;

class PaymentSuccessNotification extends BaseNotification
{
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Payment Successful')
            ->view(
                'laravel-notification-suite::emails.payments.payment-success',
                array_merge($this->data, [
                    'user' => $notifiable,
                ])
            );
    }
}
