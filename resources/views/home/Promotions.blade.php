<x-container class="relative">
    <h2 class="text-4xl font-semibold py-10">Акции и спецпредложения</h1>
    <menu class="swiper promotions-swiper pb-10 ">
        <ul class="flex swiper-wrapper ">
            @foreach($promotions as $promotion)
            <li class="swiper-slide h-auto bg-teal-50 border rounded-lg border-teal-200 p-5">
                <div class="grid grid-cols-2 justify-between gap-5 items-center">
                    <div class="flex   h-full flex-col gap-5">
                        <p class="text-xs text-gray-600 mb-2">Действует до {{$promotion->date}}</p>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl"> {{$promotion->title}}</h3>
                            <p class="text-gray-600">{{$promotion->description}}</p>
                        </div>
                        <x-button class="w-fit text-lg py-2!">
                            Подробнее
                        </x-button>
                    
                    </div>
                    <x-image  src="{{asset('storage/images/'. $promotion->image)}}" alt="{{ $promotion->title }}" width="400" height="400" />
                </div>
            </li>
            @endforeach
        </ul>
    </menu>
    <button class="swiper-button-prev absolute top-[60%] hover:cursor-pointer rotate-180 bg-white p-4 flex rounded-full border border-gray-300 shadow-[4px_-8px_6px_-1px_rgba(0,0,0,0.1)] -left-8 z-40"/>
    <button class="swiper-button-next absolute top-[60%] hover:cursor-pointer bg-white p-4 flex rounded-full border border-gray-300 shadow-[-4px_-8px_6px_-1px_rgba(0,0,0,0.1)] -right-8 z-40"/>

</x-container>
