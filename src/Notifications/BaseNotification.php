<?php

namespace Bamilawal\LaravelNotificationSuite\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

abstract class BaseNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected array $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function via($notifiable): array
    {
        $channels = [];

        if (config('laravel-notification-suite.channels.mail')) {
            $channels[] = 'mail';
        }

        if (config('laravel-notification-suite.channels.database')) {
            $channels[] = 'database';
        }

        return $channels;
    }
}
