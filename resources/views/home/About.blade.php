<div class="bg-no-repeat min-h-190" style="background-image: url({{ asset('storage/images/' . $about->background) }})">
    <x-container class="flex flex-col gap-5 lg:gap-25 my-0! items-end py-13">
        <h1 class="text-4xl lg:text-7xl font-bold font-source-serif">{{$about->title}}</h1>
        <p class="text-gray-700 text-lg lg:text-2xl text-end max-w-160">{{$about->description}}</p>
        <div class="flex flex-col sm:flex-row gap-5 lg:gap-10">
            <x-button class=" shadow-lg relative px-6 py-3 rounded-full text-lg lg:text-2xl">
                <a href="/catalog" class="">Перейти в каталог</a>
            </x-button>
            <x-button class=" px-6 py-3 rounded-full text-lg lg:text-2xl bg-emerald-500! text-gray-700">
                <a href="/contacts" class="">Контакты</a>
            </x-button>
        </div>
    </x-container>
</div>