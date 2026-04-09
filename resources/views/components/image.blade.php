@props([
    'class' => '',
    'src' => 'https://placeholder.apptor.studio/200/200/product3.png',
    'url'=> '',
    'alt' => 'text',
    'width'=> '200',
    'height' => '200',
    'loading' => 'lazy',
    'size' => null,


])
@php

if($url) {
    $image =$url;
} else {
    $image = asset('storage/'.$src);
}

@endphp

<img
src={{$image}} 
alt="{{ $alt }}"
size="{{ $size }}" 
width="{{$width}}" 
height="{{$height}}" 
{{ $attributes->merge(['class' => "rounded-lg object-cover {$class}"]) }}
loading="{{$loading}}"
onerror="src='https://placeholder.apptor.studio/500/500/product3.png'" />