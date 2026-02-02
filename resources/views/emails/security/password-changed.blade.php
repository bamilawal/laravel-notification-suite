@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    This is a confirmation that the password for your
    {{ config('laravel-notification-suite.branding.app_name') }} account
    was changed successfully.
</p>

<p>
    If you made this change, no further action is required.
</p>

<p>
    If you did not change your password, please contact support immediately.
</p>

<x-laravel-notification-suite::button url="{{ $supportUrl ?? '#' }}">
    Contact Support
</x-laravel-notification-suite::button>
@endsection
