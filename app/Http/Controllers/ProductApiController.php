<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category', 'supplier'])->lazy();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        $product = Product::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'New product created.',
            'data' => $product->toArray(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            $ret = [
                'success' => true,
                'message' => 'Product record fetched.',
                'data' => $product->toArray(),
            ];
        }
        catch (ModelNotFoundException $e) {
            $ret = [
                'success' => false,
                'message' => $e->getMessage(),
                'data' => null,
            ];
            $responseCode = 404;
        }
        
        return response()->json($ret, $responseCode ?? 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $validated = $request->validated();
        try {
            $product = Product::findOrFail($id);
            $product->fill($validated);
            $product->save();
            $ret = [
                'success' => true,
                'message' => 'Product updated successfully.',
                'data' => $product->toArray(),
            ];
        }
        catch (ModelNotFoundException $e) {
            $ret = [
                'success' => false,
                'message' => $e->getMessage(),
                'data' => null,
            ];
            $responseCode = 404;
        }
        
        return response()->json($ret, $responseCode ?? 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            $ret = [
                'success' => true,
                'message' => 'Product deleted successfully.',
                'data' => $product->toArray(),
            ];
        }
        catch (ModelNotFoundException $e) {
            $ret = [
                'success' => false,
                'message' => $e->getMessage(),
                'data' => null,
            ];
            $responseCode = 404;
        }
        
        return response()->json($ret, $responseCode ?? 200);
    }
}
