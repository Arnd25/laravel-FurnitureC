@extends('layout')


@section('content')

<x-container class="grid justify-between text-white gap-40 grid-cols-2">
    <div class="rounded-lg bg-cyan-900 items-center border">
        <a class="p-5 flex flex-col items-center gap-4" href="/admin/products">
            <p class="text-2xl">Товары</p>
            <p>Просмотр,редактирование, создание и удалние товаров</p>
            <x-button>
                Перейти
            </x-button>
        </a>
        
    </div>
    <div class="rounded-lg bg-cyan-900 items-center border">
        <a class="p-5 flex flex-col items-center gap-4" href="/admin/feedback">
            <p class="text-2xl">Сообщения</p>
            <p>Просмотр,редактирование, создание и удалние сообщений</p>
            <x-button>
                Перейти
            </x-button>
        </a>
        
    </div>
</x-container>  



    
@endsection