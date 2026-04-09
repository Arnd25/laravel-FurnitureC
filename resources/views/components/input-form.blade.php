@props([
    'class' => '',
    'type' => 'text',
    'placeholder' => 'text',
    'name'=> 'input',
    'accept'=>'',
])

<input
    type="{{ $type }}" 
    name="{{$name}}"
    accept="{{$accept}}" 
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => "bg-gray-100 px-4 focus:shadow-2xl py-2 rounded-lg border border-gray-300 w-full {$class} "])}} " 
    />