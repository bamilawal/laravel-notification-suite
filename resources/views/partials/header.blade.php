@php
    $branding = config('laravel-notification-suite.branding');
@endphp

<table width="100%" cellpadding="0" cellspacing="0"
       style="background-color: {{ $branding['primary_color'] }}; padding:20px;">
    <tr>
        <td align="center">
            @if($branding['logo'])
                <img src="{{ $branding['logo'] }}"
                     alt="{{ $branding['app_name'] }}"
                     style="max-height:50px;">
            @else
                <h1 style="margin:0; color:#ffffff; font-size:22px;">
                    {{ $branding['app_name'] }}
                </h1>
            @endif
        </td>
    </tr>
</table>
