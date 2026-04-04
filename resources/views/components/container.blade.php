@props(['class' => ''])

<div {{ $attributes->merge(['class' => "max-w-360 mx-auto {$class}"]) }}>
    {{ $slot }}
</div>