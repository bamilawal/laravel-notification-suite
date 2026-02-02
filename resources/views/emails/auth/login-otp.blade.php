@extends('laravel-notification-suite::layouts.email')

@section('content')
<p>Hello {{ $user->name ?? 'there' }},</p>

<p>
    Use the one-time password (OTP) below to complete your login.
</p>

<p style="font-size:28px; font-weight:bold; letter-spacing:4px; text-align:center; margin:24px 0;">
    {{ $otp }}
</p>

<p>
    This code will expire in {{ $expiresIn ?? '10 minutes' }}.
</p>

<p>
    If you did not attempt to log in, please secure your account immediately.
</p>
@endsection
