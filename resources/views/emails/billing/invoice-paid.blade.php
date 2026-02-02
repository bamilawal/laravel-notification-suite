@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    We’ve received your payment. Your invoice has been marked as
    <strong>paid</strong>.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Invoice Number:</strong></td>
        <td>{{ $invoiceNumber }}</td>
    </tr>
    <tr>
        <td><strong>Amount Paid:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>Payment Date:</strong></td>
        <td>{{ $paidAt ?? now()->toDayDateTimeString() }}</td>
    </tr>
</table>

<x-laravel-notification-suite::button url="{{ $receiptUrl ?? '#' }}">
    Download Receipt
</x-laravel-notification-suite::button>

<p>
    Thank you for your prompt payment.
</p>
@endsection
