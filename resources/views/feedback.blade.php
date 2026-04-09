@extends('layout')


@section('content')

<div class="bg-teal-900 w-full">
    <x-container class="gap-10 my-0! flex flex-col items-center py-20">
        <div class="flex w-150  flex-col bg-gray-100 h-fit gap-10 my-auto px-4 py-10 rounded-lg">
            <h2 class=" text-2xl font-semibold text-center">Напишите нам</h2>
            <form method="POST" action="{{route('feedback.store')}}" class="flex flex-col gap-5">
                @csrf
                <div class="flex flex-col gap-5">
                    <div class="">
                        <label for="name">Ваше имя:</label>
                        <x-input-form class="" placeholder="Ваше имя" name="name"/>
                    </div>
                    <div class="">
                        <label for="email">Ваша почта:</label>
                        <x-input-form placeholder="Ваша почта" name="email"/>
                    </div>
                </div>
                <x-input-text-area placeholder="Ваше сообщение" name="text" class="h-40"/>
                <x-button class="w-fit text-lg py-2!">
                    Отправить
                </x-button>
            </form> 
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

        </div>
        
    </x-container>
</div>

@endsection()