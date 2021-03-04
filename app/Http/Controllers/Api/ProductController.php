<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'data' => $products,
            'status' => 200,
        ]);
    }

    public function show(Product $product)
    {
        return response()->json([
            'data' => $product,
            'status' => 200,
        ]);
    }
}
