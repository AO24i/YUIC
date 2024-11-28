@props(['submit' => 'save'])

<form wire:submit="{{ $submit }}">

	{{ $slot }}

	@if (isset($actions))
		<div class="mb-4 mt-5 d-flex justify-content-center align-items-middle">
			{{ $actions }}
		</div>
	@endif

</form>