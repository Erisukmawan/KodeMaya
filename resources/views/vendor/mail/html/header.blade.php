@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="url('assets/images/logo/logo.svg'" class="logo" alt="KodeMaya Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
