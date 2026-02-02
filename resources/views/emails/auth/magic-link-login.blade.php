@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Click the button below to securely log in to your
    {{ config('laravel-notification-suite.branding.app_name') }} account.
</p>

<x-laravel-notification-suite::button url="{{ $loginUrl }}">
    Login Securely
</x-laravel-notification-suite::button>

<p>
    This link can only be used once and will expire shortly.
</p>

<p>
    If you didn’t request this login link, you can ignore this email.
</p>
@endsection
