<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(string $query)
    {
        $products = Product::search($query)->get();
        return view('search', ['query' => $query, 'products' => $products]);
    }

    public function searchByCategory(string $category)
    {
        $products = Category::where('title', $category)->get()->flatMap(function ($category) {
            return $category->product()->get();
        });
        return view('search', ['query' => $category, 'products' => $products]);
    }
}
