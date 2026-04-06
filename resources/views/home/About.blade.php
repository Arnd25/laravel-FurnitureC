<div class="bg-no-repeat min-h-190" style="background-image: url({{ asset('storage/images/banner-bg.png') }})">
    <x-container class="flex flex-col gap-25 items-end py-13">
        <h1 class="text-7xl font-bold font-source-serif">{{$about->title}}</h1>
        <p class="text-gray-700 text-2xl text-end max-w-160">{{$about->description}}</p>
        <div class="flex gap-10">
            <button>
                <a href="/" class="bg-blue-300 border shadow-lg relative border-blue-400 px-6 py-3 rounded-full text-2xl">Купить мебель</a>
            </button>
            <button>
                <a href="/" class="bg-amber-200 border shadow-lg relative  border-amber-300 px-6 py-3 rounded-full text-2xl">Связаться с нами</a>
            </button>
        </div>
    </x-container>
</div>