@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    We received a request to reset your password for your
    {{ config('laravel-notification-suite.branding.app_name') }} account.
</p>

<x-laravel-notification-suite::button url="{{ $resetUrl }}">
    Reset Password
</x-laravel-notification-suite::button>

<p>
    This password reset link will expire in {{ $expiresIn ?? '60 minutes' }}.
</p>

<p>
    If you did not request a password reset, you can safely ignore this email.
</p>
@endsection
