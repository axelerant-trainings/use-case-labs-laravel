<?php

namespace App\Swagger;

use App\Swagger\ProductResponseFailed;

/**
 * @OA\Schema(
 *   title="StoreProductResponseFailed",
 *   description="Failed response for store product API.",
 *   @OA\Xml(
 *     name="StoreProductResponseFailed",
 *   ),
 * )
 */
class StoreProductResponseFailed extends ProductResponseFailed {
    
    /**
     * @OA\Property(
     *   title="message",
     *   description="A status message",
     *   example="Validation errors",
     * )
     *
     * @var string
     */
    public $message;
    
    /**
     * @OA\Property(
     *   title="Data",
     *   description="List of validation errors",
     *   type="object",
     *   example={
     *     "name": {
     *       0: "The name has already been taken.",
     *     },
     *     "category_id": {
     *       0: "The category id field must be an integer.",
     *       1: "The category id field must be greater than 0.",
     *     },
     *     "supplier_id": {
     *       0: "The selected supplier id is invalid.",
     *     },
     *     "price": {
     *       0: "The price field must have 2 decimal places.",
     *     },
     *   }
     * )
     *
     * @var object
     */
    public $data;
}
