@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello Admin,</p>

<p style="color:#b91c1c; font-weight:bold;">
    A system error has occurred and requires immediate attention.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Error Type:</strong></td>
        <td>{{ $errorType ?? 'Application Error' }}</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>{{ $message ?? 'An unexpected error occurred' }}</td>
    </tr>
    <tr>
        <td><strong>Time:</strong></td>
        <td>{{ $time ?? now()->toDayDateTimeString() }}</td>
    </tr>
</table>

<p>
    Please investigate the issue as soon as possible.
</p>

<x-laravel-notification-suite::button
    url="{{ $logsUrl ?? '#' }}"
    color="#b91c1c">
    View Logs
</x-laravel-notification-suite::button>
@endsection
