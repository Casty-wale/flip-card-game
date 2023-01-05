<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ URL('storage/images/comp/dot_com.png') }}" class="logo" alt="GDC Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
