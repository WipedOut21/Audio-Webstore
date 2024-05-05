<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;

    protected $table = 'order_history';

    public function products()
    {
        return $this->hasMany(OrderedProduct::class, 'order_id', 'id')->get()->map(
            function ($item) {
                return [
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    'product' => Product::where("id", $item->product_id)->first()->toArray(),
                ];
            }
        );
    }
}
