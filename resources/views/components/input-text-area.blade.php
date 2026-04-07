@props(['class' => '', 'type' => 'text', 'placeholder' => 'text', 'name'=> 'input'])

<textarea {{ $attributes->merge(['class' => "bg-gray-100 px-4 py-2 rounded-lg border focus:shadow-2xl border-gray-300 w-full {$class} "]) }} placeholder="{{ $placeholder }}" name="{{ $name }}">{{ $slot }}</textarea>