<?php

use App\Http\Controllers\AddressInfoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('cart', CartController::class);
Route::middleware(['web'])->group(function () {
    Route::post('address', [AddressInfoController::class, 'store']);
    Route::post('payment', [PaymentController::class, 'store']);
});

Route::post('order/place', [OrderController::class, 'place']);

