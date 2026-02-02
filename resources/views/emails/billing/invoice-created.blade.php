@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    A new invoice has been generated on
    <strong>{{ config('laravel-notification-suite.branding.app_name') }}</strong>.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Invoice Number:</strong></td>
        <td>{{ $invoiceNumber }}</td>
    </tr>
    <tr>
        <td><strong>Amount Due:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>Due Date:</strong></td>
        <td>{{ $dueDate }}</td>
    </tr>
</table>

<x-laravel-notification-suite::button url="{{ $invoiceUrl ?? '#' }}">
    View Invoice
</x-laravel-notification-suite::button>

<p>
    Please ensure payment is made before the due date to avoid service interruption.
</p>
@endsection
