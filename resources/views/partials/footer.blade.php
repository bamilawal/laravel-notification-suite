@php
    $footerText = config('laravel-notification-suite.templates.footer_text');
@endphp

<table width="100%" cellpadding="0" cellspacing="0"
       style="background-color:#f9fafb; padding:20px;">
    <tr>
        <td align="center" style="font-size:12px; color:#6b7280;">
            {{ $footerText }}

            @if(config('laravel-notification-suite.templates.show_unsubscribe'))
                <br><br>
                <a href="{{ $unsubscribeUrl ?? '#' }}"
                   style="color:#6b7280; text-decoration:underline;">
                    Unsubscribe
                </a>
            @endif
        </td>
    </tr>
</table>
