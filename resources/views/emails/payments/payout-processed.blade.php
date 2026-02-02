@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Your payout has been successfully processed.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Amount:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>Destination:</strong></td>
        <td>{{ $destination ?? 'Bank account' }}</td>
    </tr>
    <tr>
        <td><strong>Reference:</strong></td>
        <td>{{ $reference }}</td>
    </tr>
</table>

<p>
    Funds should arrive shortly depending on your bank.
</p>

<x-laravel-notification-suite::button url="{{ $payoutUrl ?? '#' }}">
    View Payout Details
</x-laravel-notification-suite::button>
@endsection
