@extends('layout')


@section('content')
<x-container>
        <div class="flex  rounded-lg">
            <div class="flex flex-col gap-2 p-5 w-full">
                <p class="text-4xl font-medium">{{$feedback->name}}</p>
                <p class="text-gray-600 text-lg">{{$feedback->email}}</p>
                <p class="text-white w-full rounded-lg p-5 bg-gray-700 flex">{{$feedback->text}}</p>
                <div class="flex flex-col gap-5">
                    <form method="post" action="{{ route('feedback.destroy', $feedback->id) }}">
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