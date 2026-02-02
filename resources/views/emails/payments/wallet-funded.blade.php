@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Your wallet has been funded successfully.
</p>

<table cellpadding="6" cellspacing="0" style="margin:16px 0;">
    <tr>
        <td><strong>Amount Added:</strong></td>
        <td>{{ $amount }}</td>
    </tr>
    <tr>
        <td><strong>New Balance:</strong></td>
        <td>{{ $balance }}</td>
    </tr>
    <tr>
        <td><strong>Reference:</strong></td>
        <td>{{ $reference }}</td>
    </tr>
</table>

<x-laravel-notification-suite::button url="{{ $walletUrl ?? '#' }}">
    View Wallet
</x-laravel-notification-suite::button>
@endsection
