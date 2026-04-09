<x-container class="flex flex-col gap-10">  
    <h2 class="text-4xl font-semibold mt-20">Товары</h2>
    <ul class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">
        @foreach($products as $product)
        <li class="flex flex-col h-full justify-center">
            <x-image class="max-w-full w-full rounded-b-none! object-center max-h-50 object-contain" src="{{$product->image}}" alt="{{ $product->title }}" width="400" height="400" />
            <div class="flex justify-end h-full bg-emerald-50 shadow-xl p-4 rounded-b-lg border border-emerald-100 flex-col gap-2">
                <h3 class="text-2xl font-semibold min-w-0 max-w-70 line-clamp-2 wrap-break-word">{{$product->title}}</h3>
                <p class="text-gray-600 line-clamp-2">{{$product->description}}</p>
                <p class="text-3xl text-green-500">{{$product->price}}₽</p>
                <x-button class="mt-2">Добавить в корзину</x-button>
            </div>
        </li>
        @endforeach
    </ul>
</x-button> 