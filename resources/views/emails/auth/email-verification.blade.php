@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Thanks for creating an account with
    <strong>{{ config('laravel-notification-suite.branding.app_name') }}</strong>.
    Please confirm your email address to get started.
</p>

<x-laravel-notification-suite::button url="{{ $verificationUrl }}">
    Verify Email Address
</x-laravel-notification-suite::button>

<p>
    This verification link will expire in {{ $expiresIn ?? '24 hours' }}.
</p>

<p>
    If you didn’t create an account, no action is required.
</p>
@endsection
