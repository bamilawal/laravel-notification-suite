@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Your receipt is now available for the recent payment made on
    {{ config('laravel-notification-suite.branding.app_name') }}.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Receipt Number:</strong></td>
        <td>{{ $receiptNumber }}</td>
    </tr>
    <tr>
        <td><strong>Amount:</strong></td>
        <td>{{ $amount }}</td>
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
    Keep this receipt for your records.
</p>
@endsection
