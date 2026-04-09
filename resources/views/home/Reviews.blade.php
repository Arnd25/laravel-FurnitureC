<x-container>
    <h2 class="text-4xl font-semibold py-10">Отзывы</h1>
    <ul class="grid grid-cols-4 gap-10">
        @foreach($reviews as $review)
            <li class="flex flex-col bg-teal-700 text-white rounded-lg">
                <div class="flex border-b pb-4 border-teal-400 shadow-lg gap-5">
                    <x-image src="{{ $review->image }}" class="rounded-full! max-h-13 max-w-13 ml-4 mt-4" />
                    <div class="">
                        <h3 class="text-lg mt-4 mr-4 font-medium">{{ $review->name }}</h3>
                        <div class="">
                            {{ $review->rating }}
                        </div>
                    </div>
                </div>
                <p class="text-lg p-5">{{ $review->comment }}</p>
            </li>
        @endforeach
    </ul>   
</x-container>
