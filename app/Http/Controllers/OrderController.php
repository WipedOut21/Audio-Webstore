<?php

namespace App\Http\Controllers;

use App\Models\OrderedProduct;
use App\Models\OrderHistory;
use Illuminate\Support\Facades\Auth;
use Jackiedo\Cart\Cart;

class OrderController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->middleware('auth');
        $this->middleware('web');
        $this->cart = $cart;
    }

    public function index()
    {
        $order_items = OrderHistory::select("*")
            ->orderBy("created_at", "desc")
            ->get()
            ->map(function ($item) {
            return [
                'id' => $item->id,
                "total" => $item->total,
                'prod_details' => $item->products(),
                'date' => $item->created_at
            ];
        });
        return view('order.order-history', compact('order_items'));
    }

    public function place()
    {
        $orderHistoryItem = OrderHistory::factory()->create([
            'email' => Auth::user()->email,
            'total' => $this->cart->getTotal(),
        ]);

        foreach ($this->cart->getItems() as $product) {
            $prod_details = $product->getDetails();
            OrderedProduct::factory()->create([
                'order_id' => $orderHistoryItem->id,
                'product_id' => $prod_details['id'],
                'quantity' => $prod_details['quantity'],
                'price' => $prod_details['price'],
            ]);
        }

        $this->cart->destroy();
    }
}
