<x-container class="relative">
    <h2 class="lg:text-4xl text-2xl  font-semibold py-10">Акции и спецпредложения</h1>
    <menu class="swiper promotions-swiper pb-10 ">
        <ul class="flex swiper-wrapper ">
            @foreach($promotions as $promotion)
            <li class="swiper-slide h-auto bg-teal-50  border rounded-lg border-teal-200 p-5">
                <div class="grid w-full lg:grid-cols-2 justify-center gap-5 items-center">
                    <div class="flex order-2 sm:order-1 items-center lg:items-start  h-full flex-col gap-5">
                        <p class="text-xs text-gray-600 self-start mb-2">Действует до {{$promotion->date}}</p>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-xl lg:text-2xl"> {{$promotion->title}}</h3>
                            <p class="text-gray-600">{{$promotion->description}}</p>
                        </div>
                        <x-button class="w-fit text-lg py-2!">
                            Подробнее
                        </x-button>
                    
                    </div>
                    <x-image class="order-1 sm:order-2 w-full"  src="{{asset('storage/images/'. $promotion->image)}}" alt="{{ $promotion->title }}" width="400" height="400" />
                </div>
            </li>
            @endforeach
        </ul>
    </menu>

</x-container>
