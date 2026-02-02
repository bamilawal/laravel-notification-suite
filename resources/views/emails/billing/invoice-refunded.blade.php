@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    A refund has been processed for the following invoice.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Invoice Number:</strong></td>
        <td>{{ $invoiceNumber }}</td>
    </tr>
    <tr>
        <td><strong>Refund Amount:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>Refund Date:</strong></td>
        <td>{{ $refundedAt ?? now()->toDayDateTimeString() }}</td>
    </tr>
</table>

<p>
    Funds should reflect in your account shortly, depending on your payment provider.
</p>

<x-laravel-notification-suite::button url="{{ $invoiceUrl ?? '#' }}">
    View Invoice
</x-laravel-notification-suite::button>
@endsection
