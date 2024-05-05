<?php

namespace App\Http\Controllers;

use App\Models\PaymentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'card_number' => 'required|integer',
            'cvv' => 'required|integer',
            'expiry' => 'required|string'
        ]);

        PaymentInfo::factory()->create([
            'email' => Auth::user()->email,
            'card_number' => $validated['card_number'],
            'cvv' => $validated['cvv'],
            'expiry' => $validated['expiry']
        ]);
    }
}
