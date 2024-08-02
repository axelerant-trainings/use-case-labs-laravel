<?php

namespace App\Swagger;

use App\Swagger\ProductResponseSuccess;

/**
 * @OA\Schema(
 *   title="ProductResponseFailed",
 *   description="Failed response for a product.",
 *   @OA\Xml(
 *     name="ProductResponseFailed",
 *   ),
 * )
 */
class ProductResponseFailed extends ProductResponseSuccess {
    
    /**
     * @OA\Property(
     *   title="message",
     *   description="A status message",
     *   example="No query results for model [App\Models\Product] 100",
     * )
     *
     * @var string
     */
    public $message;
    
    /**
     * @OA\Property(
     *   title="Data",
     *   description="List of validation errors",
     *   example=null
     * )
     *
     * @var NULL
     */
    public $data;
}
