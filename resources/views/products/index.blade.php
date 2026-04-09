@extends('layout')


@section('content')
<x-container class="flex flex-col gap-5">
    <a href="/admin">
        <x-button>
            <-Вернуться
        </x-button>
    </a>
    <ul class="grid grid-cols-4 gap-15">
        <li class="w-full h-full">
            <a class="bg-blue-100 border items-center justify-center border-blue-400 text-blue-700 px-4 py-3 rounded h-full flex flex-col" href="{{route('products.create')}}">
                <p class="text-3xl">+++</p>
                <p class="text-2xl">Создать новый продукт</p>
            </a>
        </li>
        @foreach($products as $product)
        <li class="flex flex-col text-white justify-end rounded-lg">
            <x-image src="{{$product->image}}" class="w-full max-h-60 bg-white" />
            <div class="flex flex-col bg-cyan-700 rounded-lg gap-2 justify-end p-5 w-full">
                <div class="flex justify-between gap-5 items-center min-w-0">
                    <p class="text-xl text-white font-medium min-w-0 max-w-40 line-clamp-2 wrap-break-word">
                        {{ $product->title }}
                    </p>
                    <p class="text-2xl text-green-400 line-clamp-2">{{$product->price}}₽</p>
                </div>
                <p class="text-gray-300 line-clamp-2">{{$product->description}}</p>
                <div class="flex flex-col  gap-5">
                    
                    <div class="flex justify-between gap-5">
                        <form method="get" action="{{ route('products.edit', $product->id) }}">
                            @csrf
                            <x-Button class="bg-amber-500! text-lg!">
                                Редактировать
                            </x-Button>
                        </form>
                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                        @method('DELETE')
                        @csrf
                        <x-Button class="bg-red-500! text-lg!">
                            Удалить
                        </x-Button>
                    </form>
                    </div>
                    <form class="" method="GET" action="{{route('products.show', $product->id)}}">
                        @csrf
                        <x-Button class="text-xl! w-full">
                            Подробнее
                        </x-Button>
                    </form>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    
    


</x-container>
    


@endsection