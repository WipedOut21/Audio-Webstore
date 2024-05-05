@php use Jackiedo\Cart\Facades\Cart; @endphp
<x-app-layout>
    <x-slot name="scripts">
        @vite([ "resources/js/components/cart.js"])
    </x-slot>

    <x-nav-header/>
    <h1 class="p-5 mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 lg:text-2xl dark:text-white">Your Cart</h1>

    <div class="md:flex flex-row mx-auto p-8">

        @if(empty($cart))
            <div class="flex flex-col">
                <h3>You have no items in your shopping cart!</h3>

                <a href="{{url('/')}}">
                    <button type="button"
                            class="add-to-cart-btn px-6 py-3.5 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">

                        <svg class="inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="currentColor" viewBox="0 0 18 21">
                            <path
                                d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                        </svg>
                        Continue Shopping
                    </button>
                </a>
            </div>
        @else
            <div id="products" class="flex flex-col">

                @foreach($cart as $item)
                    <div id="product_data" class="flex flex-row flex-auto my-7 me-5">
                        <a href="/product/{{$item['product']->id}}" class ="me-5 w-2/5 min-w-48">
                            <img class="rounded-t-lg object-scale-down product_image"
                                 src="{{$item['product']->image_url}}"
                                 alt="product image"/>
                        </a>


                        <div id="product_data" class="flex flex-col w-full">
                            <a href="/product/{{$item['product']->id}}">
                                <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 hover:text-blue-900 md:text-3xl lg:text-4xl dark:text-white product_name">{{$item['product']->title}}</h1>
                            </a>
                            <h1 class="mb-4 text-xl leading-none tracking-tight text-gray-600 md:text-2xl lg:text-2xl dark:text-white product_id hidden">{{$item['product']->id}}</h1>
                            <span
                                class="mb-4 max-w-10 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{$item['product']->rating}}</span>

                            <h1 class="mb-4 text-xl leading-none tracking-tight text-gray-600 md:text-2xl lg:text-2xl dark:text-white product_price">
                                AED {{$item['product']->price}}</h1>


                            <div id="product_quantity" class="flex flex-row items-center">

                                <button type="button"
                                        class="decrement-quantity-btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14"/>
                                    </svg>

                                </button>

                                <h1 class="mx-4 text-2xl leading-none tracking-tight text-gray-600 md:text-3xl lg:text-2xl dark:text-white product_quantity">{{$item["quantity"]}}</h1>



                                <button type="button"
                                        class="increment-quantity-btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                    </svg>

                                </button>
                            </div>
                        </div>

                    </div>

                    <hr class="me-10"/>
                @endforeach
            </div>

            <div id="checkout" class="flex flex-row ms-auto">
                <hr class="hidden md:block h-full w-0.5 bg-gray-300 border-0 dark:bg-gray-700">

                <div class="flex flex-col sm:ms-10 sm:mt-10 w-full">
                    <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white product_name">
                        Checkout</h1>

                    <div id="cart_total" class="flex flex-row justify-between gap-52">
                        <p class="text-base text-gray-600 dark:text-white">Total:</p>
                        <p class="text-base text-gray-600 dark:text-white whitespace-nowrap">{{Cart::getSubtotal()}} AED</p>
                    </div>

                    <hr/>

                    <div id="cart_total" class="flex flex-row justify-between mt-2">
                        <p class="text-base text-gray-600 dark:text-white">Shipping Fees:</p>
                        <p class="text-base text-gray-600 dark:text-white">FREE</p>
                    </div>

                    <hr/>

                    <button type="button"
                            class="checkout-btn px-6 py-3.5 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">

                        <svg class="inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="currentColor" viewBox="0 0 18 21">
                            <path
                                d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                        </svg>
                        Checkout
                    </button>

                    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 mt-10">
                        <form class="space-y-4">
                            <div>
                                <label for="voucher" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Do you have a voucher or gift card? </label>
                                <input type="text" id="voucher" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="e.x:- NEW50" required />
                            </div>
                            <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Apply Code</button>
                        </form>
                    </div>
                </div>
            </div>

        @endif

    </div>

</x-app-layout>
