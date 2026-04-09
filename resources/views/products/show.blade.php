@extends('layout')


@section('content')
<x-container>
        <div class="flex  rounded-lg">
            <x-image src="{{$product->image}}" class="w-full" />
            <div class="flex flex-col gap-2 p-5 w-full">
                <div class="flex  w-full justify-between gap-5 items-center">
                    <p class="text-4xl font-medium">{{$product->title}}</p>
                    <p class="text-2xl font-bold">{{$product->price}}</p>
                </div>
                <p class="text-gray-600">{{$product->description}}</p>
                <div class="flex flex-col gap-5">
                    <form method="" action="">
                        @csrf
                        <x-Button class="bg-amber-500! text-xl!">
                            Редактировать
                        </x-Button>
                    </form>
                    <form method="post" action="{{ route('products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <x-Button class="bg-red-500! text-xl!">
                            Удалить
                        </x-Button>
                    </form>
                </div>
            </div>
        </div>
</x-container>
    


@endsection