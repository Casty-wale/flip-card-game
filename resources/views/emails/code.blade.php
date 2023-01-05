@component('mail::message')
{{-- # Introduction --}}
# Hello {{ $userName }}

{{-- The body of your message. --}}
Your promo code is {{ $promoCode }}. 

Kindly call 0302521694 / 0549281817 or send an email to support@ghana.com to purchase a product with your promo code.

{{-- @component('mail::button', ['url' => 'https://ghana.com'])
Button Text
@endcomponent --}}

Thanks,<br>
GHANA DOT COM LTD.
{{-- {{ config('app.name') }} --}}
@endcomponent
