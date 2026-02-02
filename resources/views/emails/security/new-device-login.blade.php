@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    We noticed a login to your
    <strong>{{ config('laravel-notification-suite.branding.app_name') }}</strong>
    account from a new device.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Device:</strong></td>
        <td>{{ $device ?? 'Unknown device' }}</td>
    </tr>
    <tr>
        <td><strong>Location:</strong></td>
        <td>{{ $location ?? 'Unknown location' }}</td>
    </tr>
    <tr>
        <td><strong>Time:</strong></td>
        <td>{{ $time ?? now()->toDayDateTimeString() }}</td>
    </tr>
</table>

<p>
    If this was you, no action is required.
</p>

<p>
    If you don’t recognize this activity, please secure your account immediately.
</p>

<x-laravel-notification-suite::button url="{{ $securityUrl ?? '#' }}">
    Review Account Security
</x-laravel-notification-suite::button>
@endsection
