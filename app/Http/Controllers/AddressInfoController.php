<?php

namespace App\Http\Controllers;

use App\Models\AddressInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressInfoController extends Controller
{
    //

    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string',
            'phone' => 'required|integer',
            'state' => 'required|string',
            'zipcode' => 'required|integer',
        ]);

        AddressInfo::factory()->create([
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'state' => $validated['state'],
            'zipcode' => $validated['zipcode'],
            'email' => Auth::user()->email
        ]);
    }
}
