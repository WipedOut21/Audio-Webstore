<x-app-layout>
    <x-nav-header/>

    <h1 class="p-5 mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 lg:text-2xl dark:text-white">Your Orders</h1>

    <div class="md:flex flex-row mx-auto p-8">

        @if(empty($order_items))
            <h3>You have not placed any orders!</h3>
        @else
            <div id="orders" class="flex flex-col">

                @foreach($order_items as $order_item)
                   <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg mt-5">
                    <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                        <div class="flex items-center flex-1 space-x-4">
                            <h5>
                                <span class="text-gray-500">Order Id:</span>
                                <span class="dark:text-white"> {{$order_item["id"]}}</span>
                            </h5>
                            <h5>
                                <span class="text-gray-500">Order Date:</span>
                                <span class="dark:text-white">{{$order_item["date"]}}</span>
                            </h5>
                            <h5>
                                <span class="text-gray-500">Total: </span>
                                <span class="dark:text-white">AED {{$order_item["total"]}}</span>
                            </h5>
                        </div>
                    </div>
                   </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table id="history_table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-16 py-3">
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Product Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Product
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Qty
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($order_item["prod_details"] as $prod_details)
                                @php($product = $prod_details["product"])

                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                                    <td class="p-4 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <a href="/product/{{$product["id"]}}">
                                            <img src="{{$product["image_url"]}}" class="w-16 md:w-32 max-w-full max-h-full" alt="">
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{$product["id"]}}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <a href="/product/{{$product["id"]}}">
                                            {{$product["title"]}}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center text-gray-900 dark:text-whit">
                                            {{$prod_details["quantity"]}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        AED {{$prod_details["price"]}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
