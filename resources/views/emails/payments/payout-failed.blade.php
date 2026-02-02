@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p style="color:#b91c1c; font-weight:bold;">
    We were unable to process your payout.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Amount:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>Reason:</strong></td>
        <td>{{ $reason ?? 'Payout failed' }}</td>
    </tr>
</table>

<p>
    Please update your payout details or contact support.
</p>

<x-laravel-notification-suite::button
    url="{{ $supportUrl ?? '#' }}"
    color="#b91c1c">
    Contact Support
</x-laravel-notification-suite::button>
@endsection
