@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Your payment was completed successfully on
    <strong>{{ config('laravel-notification-suite.branding.app_name') }}</strong>.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Amount:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>Reference:</strong></td>
        <td>{{ $reference }}</td>
    </tr>
    <tr>
        <td><strong>Date:</strong></td>
        <td>{{ $date ?? now()->toDayDateTimeString() }}</td>
    </tr>
</table>

<x-laravel-notification-suite::button url="{{ $receiptUrl ?? '#' }}">
    View Receipt
</x-laravel-notification-suite::button>

<p>
    Thank you for your business.
</p>
@endsection
