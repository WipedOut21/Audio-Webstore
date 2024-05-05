<x-app-layout>
    <x-slot name="scripts">
        @vite([ "resources/js/components/add_to_cart.js"])
    </x-slot>
    <x-nav-header/>

    <div class="md:flex flex-row mx-auto p-8">
        <img class="me-5 md:w-2/5 md:h-1/2 rounded-t-lg object-scale-down product_image" src="{{$product->image_url}}" alt="product image"/>

        <div id="product_data" class="flex flex-col my-5">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white product_name">{{$product->title}}</h1>
            <h1 class="mb-4 text-2xl leading-none tracking-tight text-gray-600 md:text-3xl lg:text-2xl dark:text-white product_id">{{$product->id}}</h1>
            <h1 class="mb-4 text-2xl leading-none tracking-tight text-gray-600 md:text-3xl lg:text-2xl dark:text-white product_price">AED {{$product->price}}</h1>
            <span
                class="max-w-10 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{$product->rating}}</span>

            @if($inCart)
                <button type="button" class="px-6 py-3.5 text-base font-medium text-gray-200 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 view-cart-btn">
                    View Cart
                </button>
            @else
                <button type="button" class="add-to-cart-btn px-6 py-3.5 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">
                    <svg id="cart_loader" aria-hidden="true" role="status" class="hidden w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                    </svg>

                    <svg class="inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                    </svg>
                    Add To Cart
                </button>
            @endif



            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 lg:text-2xl dark:text-white">Description</h1>
            <h1 class="mb-4 leading-8 text-gray-900 dark:text-white ">{{$product->description}}</h1>
        </div>
    </div>



    <h1 class="p-5 mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 lg:text-2xl dark:text-white">Specifications</h1>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tbody>

            @foreach($attributes as $attribute)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$attribute->key_title}}
                    </th>
                    <td class="px-6 py-4 text-right">
                        {{$attribute->value}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div id="ratings_layout" class="mx-5 my-10">
        <div class="flex items-center mb-2">
            <svg class="w-4 h-4 text-blue-700 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-blue-700 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-blue-700 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-blue-700 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">{{$product->rating}}</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
        </div>
        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">1,745 global ratings</p>
        <div class="flex items-center mt-4">
            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">5 star</a>
            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div class="h-5 bg-blue-700 rounded" style="width: 70%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">70%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">4 star</a>
            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div class="h-5 bg-blue-700 rounded" style="width: 17%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">17%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">3 star</a>
            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div class="h-5 bg-blue-700 rounded" style="width: 8%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">2 star</a>
            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div class="h-5 bg-blue-700 rounded" style="width: 4%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">4%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">1 star</a>
            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div class="h-5 bg-blue-500 rounded" style="width: 1%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">1%</span>
        </div>
    </div>


</x-app-layout>
