<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\ApiController;

/**
 * @OA\Tag(
 *   name="Products",
 *   description="API Endpoints for Products",
 * )
 */
class ProductApiController extends ApiController
{
    /**
     * @OA\Get(
     *  path="/api/products",
     *  summary="Get list of products.",
     *  description="Return a Json array of product objects.",
     *  tags={"Products"},
     *  @OA\Response(
     *    response=200,
     *    description="OK",
     *    @OA\JsonContent(ref="#/components/schemas/ProductResource"),
     *  ),
     * )
     */
    public function index()
    {
        $products = Product::with(['category', 'supplier'])->lazy();
        return response()->json($products);
    }

    /**
     * @OA\Post(
     *   path="/api/products",
     *   summary="Store a newly created product in storage.",
     *   description="Store a newly created product in storage and return the product data.",
     *   tags={"Products"},
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(ref="#/components/schemas/StoreProductRequest"),
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(ref="#/components/schemas/StoreProductResponseSuccess"),
     *   ),
     *   @OA\Response(
     *     response=422,
     *     description="Unprocessable Entity",
     *     @OA\JsonContent(ref="#/components/schemas/StoreProductResponseFailed"),
     *   ),
     * )
     *
     * @return Illuminate\Http\Response
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
     *
     * @OA\Get(
     *   path="/api/products/{product}",
     *   summary="Display the specified product.",
     *   description="Return an array of the specified product details.",
     *   tags={"Products"},
     *   @OA\Parameter(
     *     name="product",
     *     description="The id of the product to fetch",
     *     required=true,
     *     in="path",
     *     @OA\Schema(
     *       type="integer",
     *     ),
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(ref="#/components/schemas/ProductResponseSuccess"),
     *   ),
     *   @OA\Response(
     *     response=404,
     *     description="Not Found",
     *     @OA\JsonContent(ref="#/components/schemas/ProductResponseFailed"),
     *   ),
     * )
     */
    public function show(string $id)
    {
        try {
            $product = Product::with(['supplier', 'category'])->findOrFail($id);
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
     * @OA\PUT(
     *   path="/api/products/{product}",
     *   summary="Update an existing product",
     *   description="Return an array of the updated product details.",
     *   tags={"Products"},
     *   @OA\Parameter(
     *     name="product",
     *     description="The id of the product to update",
     *     required=true,
     *     in="path",
     *     @OA\Schema(
     *       type="integer",
     *     ),
     *   ),
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(ref="#/components/schemas/StoreProductRequest")
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(ref="#/components/schemas/UpdateProductResponseSuccess"),
     *   ),
     *   @OA\Response(
     *     response=422,
     *     description="Unprocessable Entity",
     *     @OA\JsonContent(ref="#/components/schemas/UpdateProductResponseFailed"),
     *   ),
     *   @OA\Response(
     *     response=404,
     *     description="Not Found",
     *     @OA\JsonContent(ref="#/components/schemas/ProductResponseFailed"),
     *   ),
     * )
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $validated = $request->validated();
        try {
            $product = Product::with(['category', 'supplier'])->findOrFail($id);
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
     * @OA\Delete(
     *   path="/api/products/{product}",
     *   summary="Remove the specified product from storage.",
     *   description="Remove the specified resource from storage.",
     *   tags={"Products"},
     *   @OA\Parameter(
     *     name="product",
     *     description="The id of the product to delete",
     *     required=true,
     *     in="path",
     *     @OA\Schema(
     *       type="integer",
     *     ),
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(ref="#/components/schemas/DeleteProductResponseSuccess"),
     *   ),
     *   @OA\Response(
     *     response=404,
     *     description="Not Found",
     *     @OA\JsonContent(ref="#/components/schemas/ProductResponseFailed"),
     *   ),
     * )
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::with(['category', 'supplier'])->findOrFail($id);
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
