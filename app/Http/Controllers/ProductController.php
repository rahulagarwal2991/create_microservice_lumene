<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function showList(Request $request, $searchKeyword)
    {
        
        $data = Product::query()
                ->where('title', 'LIKE', "%{$searchKeyword}%")
                ->orWhere('product_description', 'LIKE', "%{$searchKeyword}%") ->get();
        return response()->json($data);
    }

    
}