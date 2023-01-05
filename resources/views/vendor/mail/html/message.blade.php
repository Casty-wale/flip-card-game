@component('mail::layout')
{{-- Header --}}
@slot('header')
{{-- @component('mail::header', ['url' => config('app.url')]) --}}
@component('mail::header', ['url' => "https://ghana.com"])
{{-- {{ config('app.name') }} --}}
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}
<img src="{{ URL('storage/images/comp/dot_com.png') }}" class="logo" alt="GDC Logo">
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
{{-- © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.') --}}
© {{ date('Y') }} GHANA DOT COM LTD. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
