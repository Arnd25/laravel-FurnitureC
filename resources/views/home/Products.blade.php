<x-container class="flex flex-col gap-10">  
    <h2 class="text-4xl font-semibold mt-20">Товары</h2>
    <ul class="grid grid-cols-4 gap-5">
        @foreach($products as $product)
        <li class="flex flex-col justify-center">
            <a href="/products/{{$product->id}}">
                <x-image class="max-w-full rounded-b-none! object-center max-h-50 object-contain" src="{{asset('storage/images/' . $product->image)}}" alt="{{ $product->title }}" width="400" height="400" />
                <div class="flex bg-emerald-50 shadow-xl p-4 rounded-b-lg border border-emerald-100 flex-col gap-2">
                    <p class="text-3xl font-medium text-emerald-500">{{$product->price}}₽</p>
                    <h3 class="text-xl font-semibold">{{$product->title}}</h3>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</x-button> 