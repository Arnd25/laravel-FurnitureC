@extends('layout')


@section('content')
<x-container class="items-center justify-center flex flex-col">
    <div class="bg-gray-200 items-center rounded-xl flex max-w-150 w-full gap-10 flex-col p-10">
        <h1 class="text-3xl">Изменение продукта</h1>
        <form class=" flex flex-col w-full gap-5 mx-auto" action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <x-input-form placeholder="title..." value="{{old('title',$product->title)}}" name="title" />
            <x-input-text-area placeholder="description..." value="{{old('description',$product->description)}}" name="description" />
            <x-input-form placeholder="price..." name="price" value="{{old('price',$product->price)}}" type="number" />
            <x-input-form type="file" name="image" value="{{old('image',$product->image)}}" accept="image/*" />
            <x-button>Изменить</x-button>
        </form>
    </div>
</x-container>
    


@endsection