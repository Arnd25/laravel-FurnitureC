@props(['class' => ''])

<div {{ $attributes->merge(['class' => "max-w-360 mx-auto my-20 {$class}"]) }}>
    {{ $slot }}
</div>