@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name }},</p>

<p>
    Welcome to {{ config('laravel-notification-suite.branding.app_name') }}.
    We’re excited to have you on board.
</p>

<x-laravel-notification-suite::button url="{{ $actionUrl }}">
    Get Started
</x-laravel-notification-suite::button>

<p>
    If you didn’t create this account, you can safely ignore this email.
</p>
@endsection
