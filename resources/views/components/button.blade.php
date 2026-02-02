@props([
    'url',
    'color' => config('laravel-notification-suite.branding.primary_color')
])

<table cellpadding="0" cellspacing="0" style="margin:24px 0;">
    <tr>
        <td align="center">
            <a href="{{ $url }}"
               style="
                   background-color: {{ $color }};
                   color:#ffffff;
                   padding:12px 24px;
                   text-decoration:none;
                   font-weight:bold;
                   border-radius:6px;
                   display:inline-block;
               ">
                {{ $slot }}
            </a>
        </td>
    </tr>
</table>
