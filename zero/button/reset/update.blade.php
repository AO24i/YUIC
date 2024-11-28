@props(['label' => 'clear', 'submit' => 'save', 'id' => null, 'module' => ''])
@php
	FormX::set()->button($label, $id, $module);
@endphp

<button wire:loading.attr="disabled" wire:target="{{ $submit }}" @click="$wire.update('{{ $id }}')" onclick="jsHideError('actionBtn');" type="button" class="btn btn-block btn-outline-gray-400 mx-2">{{ $label }}</button>
