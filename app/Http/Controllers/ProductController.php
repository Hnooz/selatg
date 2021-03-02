<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        return inertia()->render('Dashboard/products/index', 
        [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return inertia()->render('Dashboard/products/create');
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        Product::create($data);

        session()->flash('toast', [
            'type' => 'success',
            'message' => 'Product created successfully'
        ]);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return inertia()->render('Dashboard/products/edit', ['product' => $product]);
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->update($data);

        session()->flash('toast', [
            'type' => 'success',
            'message' => 'Product updated successfully'
        ]);

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        session()->flash('toast', [
            'type' => 'error',
            'message' => 'Product deleted successfully'
        ]);

        return back();
    }
}
