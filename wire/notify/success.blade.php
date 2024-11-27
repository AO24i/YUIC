@props(['message', 'theme' => 'bootstrap'])

@php
	$css = $theme === 'bootstrap' ? 'alert alert-success' : ($theme === 'tailwind' ? 'text-green-600' : '');
@endphp

<div {{ $attributes->merge(['class' => $css]) }} wire:loading.remove>
	{{ $message }}
</div>
