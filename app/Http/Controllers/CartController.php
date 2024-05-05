<?php

namespace App\Http\Controllers;

use App\Models\AddressInfo;
use App\Models\PaymentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jackiedo\Cart\Cart;

class CartController extends Controller
{
    protected Cart $cart;

    public function __construct(Cart $cart)
    {
        $this->middleware('web');
        $this->middleware('auth');
        $this->cart = $cart;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("cart");
    }

    public function checkout() {
        $saved_payment_infos = PaymentInfo::where('email', Auth::user()->email)->get();
        $saved_address_infos = AddressInfo::where('email', Auth::user()->email)->get();
        return view ("cart.checkout", compact('saved_payment_infos', 'saved_address_infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:0',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
        ]);

        $this->cart->addItem([
            'id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
            'title' => $validated['title'],
            'price' => $validated['price'],
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'quantity' => 'required|integer|min:0'
        ]);

        $array = $this->cart->getItems([
            'id' => $id,
        ]);

        if (count($array) == 0) {
            // TODO:

            return;
        }

        forEach ($array as $item) {
            $this->cart->updateItem($item->getHash(), [
                'quantity' => $validate['quantity']
            ]);
        }
    }
}
