@props(['theme' => 'bootstrap'])

@if (Session::has('successX'))
	<x-yuic.wire.notify.success message="{{ Session::get('successX') }}" :theme=$theme />
@elseif ($errors->any())
	<x-yuic.wire.notify.error :errors=$errors :theme=$theme />
@endif
