@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello Admin,</p>

<p>
    A new user has just registered on
    <strong>{{ config('laravel-notification-suite.branding.app_name') }}</strong>.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Name:</strong></td>
        <td>{{ $user->name ?? 'N/A' }}</td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
        <td><strong>Registered At:</strong></td>
        <td>{{ $registeredAt ?? now()->toDayDateTimeString() }}</td>
    </tr>
</table>

<x-laravel-notification-suite::button url="{{ $adminUserUrl ?? '#' }}">
    View User
</x-laravel-notification-suite::button>
@endsection
