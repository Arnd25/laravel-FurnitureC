<div class="bg-emerald-900 w-full">
    <x-container class="grid grid-cols-2 gap-10 py-20">
        <div class="text-white flex flex-col gap-5">
            <h2 class=" text-2xl font-medium">Как с нами связаться</h2>
            <div class="flex flex-col gap-5">
                <p class="text-xl">Адрес:</p>
                <div class="map-container" style="width: 100%; height: 400px;">
                    <iframe 
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A6722de5422049490b3fd4f48bf14ba0f7240d1d85ef69d52ca18e418568380fc&amp;source=constructor"
                    width="100%"
                    height="100%"
                    class="rounded-lg"
                    ></iframe>
                </div>
                <p class="text-xl">Телефон: <a href="tel:+79999999999" class="text-emerald-400 hover:underline">+7 (999) 999-99-99</a></p>
                <p class="text-xl">Почта: <a href="mailto:info@furniture.com" class="text-emerald-400 hover:underline">info@furniture.com</a></p>
                <p class="text-xl">Мы в социальных сетях:</p>
                <div class="flex gap-2">
                    <a href="#" class="text-emerald-400 hover:underline">
                        <x-image src="https://upload.wikimedia.org/wikipedia/commons/1/12/%D0%9B%D0%BE%D0%B3%D0%BE%D1%82%D0%B8%D0%BF_MAX.svg" alt="max" width="40" height="40"/>
                    </a>
                    <a href="#" class="text-emerald-400 hover:underline">
                        <x-image src="https://upload.wikimedia.org/wikipedia/commons/1/12/%D0%9B%D0%BE%D0%B3%D0%BE%D1%82%D0%B8%D0%BF_MAX.svg" alt="max" width="40" height="40"/>
                    </a>
                    <a href="#" class="text-emerald-400 hover:underline">
                        <x-image src="https://upload.wikimedia.org/wikipedia/commons/1/12/%D0%9B%D0%BE%D0%B3%D0%BE%D1%82%D0%B8%D0%BF_MAX.svg" alt="max" width="40" height="40"/>
                    </a>
                    <a href="#" class="text-emerald-400 hover:underline">
                        <x-image src="https://upload.wikimedia.org/wikipedia/commons/1/12/%D0%9B%D0%BE%D0%B3%D0%BE%D1%82%D0%B8%D0%BF_MAX.svg" alt="max" width="40" height="40"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col bg-gray-100 h-fit gap-10 my-auto px-4 py-10 rounded-lg">
            <h2 class=" text-2xl font-semibold text-center">Напишите нам</h2>
            <form action="" class="flex flex-col gap-5">
                <div class="grid grid-cols-2 gap-5">
                    <div class="">
                        <label for="name">Ваше имя:</label>
                        <x-input-form class="" placeholder="Ваше имя" name="name"/>
                    </div>
                    <div class="">
                        <label for="email">Ваша почта:</label>
                        <x-input-form placeholder="Ваша почта" name="email"/>
                    </div>
                </div>
                <x-input-text-area placeholder="Ваше сообщение" name="text" class="h-40"/>
                <x-button class="w-fit text-lg py-2!">
                    Отправить
                </x-button>
            </form> 
        </div>
        
    </x-container>
</div>