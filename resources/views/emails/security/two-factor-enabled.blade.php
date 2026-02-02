@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Two-factor authentication (2FA) has been successfully enabled on your
    {{ config('laravel-notification-suite.branding.app_name') }} account.
</p>

<p>
    This adds an extra layer of security to protect your account.
</p>

<p>
    If you enabled this feature, no further action is required.
</p>

<p>
    If you did not enable 2FA, please contact support immediately.
</p>

<x-laravel-notification-suite::button url="{{ $securityUrl ?? '#' }}">
    Manage Security Settings
</x-laravel-notification-suite::button>
@endsection
