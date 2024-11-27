@props(['submit' => 'save', 'action' => null, 'id' => null, 'module' => null])
<form wire:submit.prevent="{{ $submit }}">
	@csrf

	<x-yale.wire.form.notify actions="create|update|clone" />

	<div class="row mb-6">
		{{ $slot }}
	</div>

	<div class="row mt-5">
		<div class="d-flex justify-content-center align-items-middle">
			@if($action === 'create')
				<x-yale.wire.btn.save label='create' :moduleX=$module :submit="$submit" />
				<x-yale.wire.btn.reset.create :module="$module" :submit="$submit" />
			@elseif($action === 'update')
				<x-yale.wire.btn.save label='save' :moduleX=$module :submit="$submit" :id="$id" />
			<x-yale.wire.btn.reset.update :module="$module" :submit="$submit" :id="$id" />
			@elseif($action === 'clone')
				<x-yale.wire.btn.save label='save as' :moduleX=$module :submit="$submit" />
			<x-yale.wire.btn.reset.update :module="$module" :submit="$submit" :id="$id" />
			@endif
		</div>
	</div>
</form>
