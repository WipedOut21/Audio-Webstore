@if(!$products->isEmpty())

    <section class="embla relative ms-10">

        <div class="flex-row flex justify-items-center">
            @if (isset($header))
                {{ $header }}
            @endif

            <div class="embla__controls">
                <div class="ms-5 mb-1 embla__buttons">
                    <button class="embla__button embla__button--prev" type="button">
                        <svg class="embla__button__svg" viewBox="0 0 532 532">
                            <path
                                fill="currentColor"
                                d="M355.66 11.354c13.793-13.805 36.208-13.805 50.001 0 13.785 13.804 13.785 36.238 0 50.034L201.22 266l204.442 204.61c13.785 13.805 13.785 36.239 0 50.044-13.793 13.796-36.208 13.796-50.002 0a5994246.277 5994246.277 0 0 0-229.332-229.454 35.065 35.065 0 0 1-10.326-25.126c0-9.2 3.393-18.26 10.326-25.2C172.192 194.973 332.731 34.31 355.66 11.354Z"
                            ></path>
                        </svg>
                    </button>

                    <button class="embla__button embla__button--next" type="button">
                        <svg class="embla__button__svg" viewBox="0 0 532 532">
                            <path
                                fill="currentColor"
                                d="M176.34 520.646c-13.793 13.805-36.208 13.805-50.001 0-13.785-13.804-13.785-36.238 0-50.034L330.78 266 126.34 61.391c-13.785-13.805-13.785-36.239 0-50.044 13.793-13.796 36.208-13.796 50.002 0 22.928 22.947 206.395 206.507 229.332 229.454a35.065 35.065 0 0 1 10.326 25.126c0 9.2-3.393 18.26-10.326 25.2-45.865 45.901-206.404 206.564-229.332 229.52Z"
                            ></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="embla__viewport">
            <div class="embla__container">
                @foreach($products as $product)
                    <div
                        class="embla__slide max-w-[16rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5">


                        <a href="/product/{{$product->id}}">
                            <img class="h-3/4 rounded-t-lg object-scale-down" src="{{$product->image_url}}" alt="product image"/>
                        </a>
                        <div class="px-5 pb-5">
                            <a href="#" class="flex items-center justify-start">
                                <h5 class="font-medium tracking-tight text-gray-900 dark:text-white line-clamp-2 mt-2.5">{{$product->title}}</h5>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">{{$product->rating}}</span>
                            </a>
                            <div class="flex items-center mt-2.5 justify-start">
                                    <span
                                        class="font-bold text-gray-500 dark:text-white mb-5">AED {{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endif
