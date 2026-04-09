@props(['class' => ''])

<div {{ $attributes->merge(['class' => "max-w-360 px-5 mx-auto my-2 lg:my-20 {$class}"]) }}>
    {{ $slot }}
</div>