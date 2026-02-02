@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    The email address associated with your
    {{ config('laravel-notification-suite.branding.app_name') }} account
    has been updated.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Old Email:</strong></td>
        <td>{{ $oldEmail }}</td>
    </tr>
    <tr>
        <td><strong>New Email:</strong></td>
        <td>{{ $newEmail }}</td>
    </tr>
</table>

<p>
    If you authorized this change, no action is required.
</p>

<p>
    If you did not make this change, please secure your account immediately.
</p>

<x-laravel-notification-suite::button
    url="{{ $securityUrl ?? '#' }}"
    color="#b91c1c">
    Secure My Account
</x-laravel-notification-suite::button>
@endsection
