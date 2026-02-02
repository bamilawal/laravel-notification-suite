@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Welcome to <strong>{{ config('laravel-notification-suite.branding.app_name') }}</strong> 🎉
</p>

<p>
    Your account has been successfully created. You can now log in,
    explore features, and start getting value right away.
</p>

<x-laravel-notification-suite::button url="{{ $dashboardUrl ?? '#' }}">
    Go to Dashboard
</x-laravel-notification-suite::button>

<p>
    If you need help, feel free to reach out to our support team anytime.
</p>
@endsection
