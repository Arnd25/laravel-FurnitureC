<x-container class="">
    <h2 class="text-4xl font-semibold py-10">Почему мы</h1>
    <ul class="grid lg:grid-cols-2 gap-10">
        @foreach($advantages as $advantage)
        <li class="flex gap-10 items-center">
            <x-image  src="{{$advantage->image}}" alt="{{ $advantage->title }}" width="100" height="100" />
            <div class="flex flex-col">
                <h3 class="text-xl font-medium">{{$advantage->title}}</h3>
                <p class="text-gray-600 text-lg">"{{$advantage->description}}"</p>
                <x-button class="w-fit text-lg py-1! mt-4">
                    Подробнее
                </x-button>
            </div>
        </li>
        @endforeach
    </ul>
</x-container>