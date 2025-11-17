<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource. (GET /products)
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage. (POST /products)
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image_url' => 'nullable|url',
        ]);

        $product = Product::create($validatedData);
        return response()->json($product, 201);
    }

    /**
     * Display the specified resource. (GET /products/{product})
     */
    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage. (PUT/PATCH /products/{product})
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:100',
            'description' => 'nullable|string',
            'price' => 'numeric|min:0',
            'stock' => 'integer|min:0',
            'image_url' => 'nullable|url',
        ]);

        $product->update($validatedData);
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage. (DELETE /products/{product})
     * Using Soft Delete
     */
    public function destroy(Product $product)
    {
        $product->delete(); // Ini akan melakukan Soft Delete
        return response()->json(null, 204);
    }
}