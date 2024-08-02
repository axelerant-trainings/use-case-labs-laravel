<?php

namespace App\Swagger;

use App\Swagger\ProductResponseSuccess;

/**
 * @OA\Schema(
 *   title="StoreProductResponseSuccess",
 *   description="Success response for store product API.",
 *   @OA\Xml(
 *     name="StoreProductResponseSuccess",
 *   ),
 * )
 */
class StoreProductResponseSuccess extends ProductResponseSuccess {
    
    /**
     * @OA\Property(
     *   title="message",
     *   description="A status message",
     *   example="New product created.",
     * )
     *
     * @var string
     */
    public $message;
}
