@props(['theme' => 'bootstrap'])

@if (Session::has('successX'))
	<x-ui.wire.notify.success message="{{ Session::get('successX') }}" :theme=$theme />
@elseif ($errors->any())
	<x-ui.wire.notify.error :errors=$errors :theme=$theme />
@endif
