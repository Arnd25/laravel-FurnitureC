@props([
    'class' => '',
])

<button 
type="submit"
 {{ $attributes->merge(['class' => "bg-teal-600 text-2xl rounded-lg cursor-pointer text-white py-3 px-3 {$class}"]) }}>
    {{ $slot }}
</button>