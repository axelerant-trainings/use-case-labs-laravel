<?php

namespace App\Swagger;

use App\Swagger\StoreProductResponseSuccess;

/**
 * @OA\Schema(
 *   title="UpdateProductResponseSuccess",
 *   description="Success response for update product API.",
 *   @OA\Xml(
 *     name="UpdateProductResponseSuccess",
 *   ),
 * )
 */
class UpdateProductResponseSuccess extends StoreProductResponseSuccess {
    
    /**
     * @OA\Property(
     *   title="message",
     *   description="A status message",
     *   example="Product updated successfully.",
     * )
     *
     * @var string
     */
    public $message;
}
