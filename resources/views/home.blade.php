<x-app-layout>
    <x-slot name="scripts">
        @vite(["resources/js/components/carousel.js", "resources/css/components/embla.css", "resources/js/components/embla-carousel.js"])
    </x-slot>


    <x-nav-header/>

    <div id="controls-carousel" class="relative w-full mb-5" data-carousel="slide">
        <!-- Carousel wrapper -->

        <div class="relative h-60 overflow-hidden rounded-lg md:h-96" id="carousel-items">

            @foreach($carousel as $index=>$product)
                <div class="top-16 hidden duration-700 ease-in-out" id="carousel-item-{{$index}}">
                    <a href="/product/{{$product->id}}">
                    <img src="{{$product->image_url}}"
                         class="object-scale-down absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="...">
                    </a>
                </div>
            @endforeach

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 -bottom-5 left-1/2 space-x-3 rtl:space-x-reverse"
             id="carousel-indicators">

            @foreach(range(1, sizeof($carousel)) as $index)
                <button type="button" id="carousel-indicator-{{$index}}" class="w-3 h-3 rounded-full"
                        aria-current="true" aria-label="Slide {{$index}}"></button>
            @endforeach
        </div>
        <!-- Slider controls -->
        <button id="data-carousel-prev" type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 hover:delay-300 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-gray-800 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button id="data-carousel-next" type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 hover:delay-300 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-gray-800 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>


    @foreach($catalog as $key => $value)
        <x-product-carousel :products="$value">
            <x-slot name="header">
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white mt-6">{{$key}}</span>
            </x-slot>
        </x-product-carousel>
    @endforeach

</x-app-layout>
