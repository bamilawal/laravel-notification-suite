@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello Admin,</p>

<p>
    A payout request has been submitted and requires review.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>User:</strong></td>
        <td>{{ $userName ?? 'N/A' }}</td>
    </tr>
    <tr>
        <td><strong>Amount:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>Requested At:</strong></td>
        <td>{{ $requestedAt ?? now()->toDayDateTimeString() }}</td>
    </tr>
</table>

<x-laravel-notification-suite::button url="{{ $payoutUrl ?? '#' }}">
    Review Payout
</x-laravel-notification-suite::button>
@endsection
