@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p style="color:#b91c1c; font-weight:bold;">
    We detected a potentially suspicious login attempt on your account.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>IP Address:</strong></td>
        <td>{{ $ipAddress ?? 'Unknown' }}</td>
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
    If this was not you, we strongly recommend changing your password immediately.
</p>

<x-laravel-notification-suite::button
    url="{{ $resetPasswordUrl ?? '#' }}"
    color="#b91c1c">
    Secure My Account
</x-laravel-notification-suite::button>

<p>
    If this was you, you may safely ignore this alert.
</p>
@endsection
