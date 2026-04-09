@extends('layout')


@section('content')
<x-container class="flex flex-col gap-5">
    <a href="/admin">
        <x-button>
            <-Вернуться
        </x-button>
    </a>
    <ul class="grid grid-cols-4 gap-15">
        @foreach($feedback as $feedback)
        <li class="flex flex-col text-white rounded-lg bg-cyan-700">
            <div class="flex flex-col gap-2 p-5 w-full">
                <div class="flex flex-col gap-0.5">
                    <p class="text-xl font-medium">{{$feedback->name}}</p>
                    <p class="text-sm text-gray-300">{{$feedback->email}}</p>
                </div>
                <div class="flex flex-col gap-5">
                    <form class="" method="GET" action="{{route('feedback.show', $feedback->id)}}">
                        @csrf
                        <x-Button class="text-xl!">
                            Подробнее
                        </x-Button>
                    </form>
                    <form method="POST" action="{{ route('feedback.destroy', $feedback->id) }}">
                        @method('DELETE')
                        @csrf
                        <x-Button class="bg-red-500! text-xl!">
                            Удалить
                        </x-Button>
                    </form>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    
    


</x-container>
    


@endsection