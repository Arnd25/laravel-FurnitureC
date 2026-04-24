@props([
   'class' => '',
   'type' => 'text',
   'placeholder' => 'text',
   'name'=> 'input',
   'value'=>''
])

<textarea
   placeholder="{{ $placeholder }}"
   name="{{ $name }}"

   {{$attributes->merge(['class' => "bg-gray-100 px-4 py-2 rounded-lg border focus:shadow-2xl border-gray-300 w-full {$class} "]) }}
   >{{$value}}</textarea>