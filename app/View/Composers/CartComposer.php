<?php

namespace App\View\Composers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\View\View;
use Jackiedo\Cart\Cart;

class CartComposer
{
    /**
     * Create a new cart composer.
     */
    public function __construct(
        protected Cart $cart,
    )
    {
    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $cart_products = array_map(function ($item) use (&$map) {
            $product = Product::find($item->get("id"));
            return [
                'product_id' => $item->get("id"),
                'quantity' => $item->get("quantity"),
                'product' => $product
            ];
        }, $this->cart->getItems());

        $view->with('cart', $cart_products);
    }
}
