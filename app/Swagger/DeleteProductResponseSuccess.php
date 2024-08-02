<?php

namespace App\Swagger;

use App\Swagger\StoreProductResponseSuccess;

/**
 * @OA\Schema(
 *   title="DeleteProductResponseSuccess",
 *   description="Success response for delete product API.",
 *   @OA\Xml(
 *     name="DeleteProductResponseSuccess",
 *   ),
 * )
 */
class DeleteProductResponseSuccess extends StoreProductResponseSuccess {
    
    /**
     * @OA\Property(
     *   title="message",
     *   description="A status message",
     *   example="Product deleted successfully.",
     * )
     *
     * @var string
     */
    public $message;
}
