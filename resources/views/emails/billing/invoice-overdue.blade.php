@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p style="color:#b91c1c; font-weight:bold;">
    This is a reminder that your invoice is now overdue.
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

<p>
    Please settle this invoice as soon as possible to avoid penalties or service disruption.
</p>

<x-laravel-notification-suite::button
    url="{{ $invoiceUrl ?? '#' }}"
    color="#b91c1c">
    Pay Now
</x-laravel-notification-suite::button>
@endsection
