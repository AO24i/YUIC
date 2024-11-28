@props(['message', 'theme' => 'bootstrap'])

<x-yale.plain.notify.success :message=$message :theme=$theme wire:loading.remove />