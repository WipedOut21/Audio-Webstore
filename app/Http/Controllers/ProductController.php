<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Jackiedo\Cart\Cart;

class ProductController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $inCart = !empty($this->cart->getItems(['id' => $id]));
        $attributes = $product->attributes()->get();
        return view("product", compact('product', 'inCart', 'attributes'));
    }
}
