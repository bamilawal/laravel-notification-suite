@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello Admin,</p>

<p>
    A new order has been placed on
    {{ config('laravel-notification-suite.branding.app_name') }}.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Order ID:</strong></td>
        <td>{{ $orderId }}</td>
    </tr>
    <tr>
        <td><strong>Customer:</strong></td>
        <td>{{ $customerName ?? 'N/A' }}</td>
    </tr>
    <tr>
        <td><strong>Total Amount:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
</table>

<x-laravel-notification-suite::button url="{{ $orderUrl ?? '#' }}">
    View Order
</x-laravel-notification-suite::button>
@endsection
