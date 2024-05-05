<x-app-layout>
    <x-nav-header/>

    <div class="flex flex-col p-5 mb-4 ">
        <h1 class="text-xl font-extrabold leading-none tracking-tight text-gray-900 lg:text-2xl dark:text-white">Search Results for: {{$query}}</h1>

        @if(count($products) == 0)
            <h3 class="mt-5">No search results matching: {{$query}} was found!</h3>
        @else
            <div id="products" class="flex flex-col">

                @foreach($products as $product)
                    <div id="product_data" class="flex flex-row flex-auto my-7 me-5">
                        <a href="/product/{{$product->id}}" class ="me-5 w-1/5">
                            <img class=" rounded-t-lg object-scale-down product_image"
                                 src="{{$product->image_url}}"
                                 alt="product image"/>
                        </a>


                        <div id="product_data" class="flex flex-col w-full">
                            <a href="/product/{{$product->id}}">
                                <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 hover:text-blue-800 md:text-3xl lg:text-4xl dark:text-white product_name">{{$product->title}}</h1>
                            </a>
                            <h1 class="mb-4 text-xl leading-none tracking-tight text-gray-600 md:text-2xl lg:text-2xl dark:text-white product_id hidden">{{$product->id}}</h1>
                            <span
                                class="mb-4 max-w-10 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{$product->rating}}</span>

                            <h1 class="mb-4 text-xl leading-none tracking-tight text-gray-600 md:text-2xl lg:text-2xl dark:text-white product_price">
                                AED {{$product->price}}</h1>



                            <a href="/product/{{$product->id}}">

                                <button type="button"
                                        class="add-to-cart-btn px-6 py-3.5 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">
                                    View Product
                                </button>
                            </a>
                        </div>

                    </div>

                    <hr/>
                @endforeach
            </div>
        @endif

    </div>



</x-app-layout>
