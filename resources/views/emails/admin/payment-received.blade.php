@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello Admin,</p>

<p>
    A payment has been successfully received.
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
        <td><strong>Reference:</strong></td>
        <td>{{ $reference }}</td>
    </tr>
</table>

<x-laravel-notification-suite::button url="{{ $paymentUrl ?? '#' }}">
    View Payment
</x-laravel-notification-suite::button>
@endsection
