<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Product::select("*")
            ->limit(5)
            ->get();

        $catalog = Category::all()
            ->flatMap(function ($category) {
               return [$category->title => $category->product()->get()];
            });

        return view('home', compact('carousel', 'catalog'));
    }
}
