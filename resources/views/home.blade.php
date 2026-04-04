@extends('layout')


@section('content')
<x-container class="py-10">
    @include('home.About')
    @include('home.Promotions')
    @include('home.Products')
    @include('home.Advantages')
    @include('home.Contact')
    @include('home.Reviews')
     
</x-container>

    
@endsection