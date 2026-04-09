@extends('layout')


@section('content')
<x-container class="items-center justify-center flex flex-col">
    <div class="bg-gray-200 items-center rounded-xl flex max-w-150 w-full gap-10 flex-col p-10">
        <h1 class="text-3xl">Изменение продукта</h1>
        <form class=" flex flex-col w-full gap-5 mx-auto" action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data"+>
            @csrf
            @method('PUT')
            <x-input-form placeholder="title..." name="title" />
            <x-input-text-area placeholder="description..." name="description" />
            <x-input-form placeholder="price..." name="price" type="number" />
            <x-input-form type="file" name="image" accept="image/*" />
            <x-button>Изменить</x-button>
        </form>
    </div>
</x-container>
    


@endsection