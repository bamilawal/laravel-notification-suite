<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? config('laravel-notification-suite.branding.app_name') }}</title>
</head>
<body style="margin:0; padding:0; background-color:#f3f4f6; font-family:Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f3f4f6; padding:30px 0;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden;">

                {{-- Header --}}
                <tr>
                    <td>
                        @include('laravel-notification-suite::partials.header')
                    </td>
                </tr>

                {{-- Body --}}
                <tr>
                    <td style="padding:32px; color:#111827; font-size:15px; line-height:1.6;">
                        @yield('content')
                    </td>
                </tr>

                {{-- Footer --}}
                <tr>
                    <td>
                        @include('laravel-notification-suite::partials.footer')
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
