@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p style="color:#b91c1c; font-weight:bold;">
    Unfortunately, your payment could not be processed.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Amount:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>Reason:</strong></td>
        <td>{{ $reason ?? 'Payment failed' }}</td>
    </tr>
    <tr>
        <td><strong>Reference:</strong></td>
        <td>{{ $reference ?? '-' }}</td>
    </tr>
</table>

<p>
    Please try again or use a different payment method.
</p>

<x-laravel-notification-suite::button
    url="{{ $retryUrl ?? '#' }}"
    color="#b91c1c">
    Retry Payment
</x-laravel-notification-suite::button>
@endsection
