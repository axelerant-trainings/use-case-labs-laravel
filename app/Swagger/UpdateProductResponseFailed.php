<?php

namespace App\Swagger;

use App\Swagger\StoreProductResponseFailed;

/**
 * @OA\Schema(
 *   title="UpdateProductResponseFailed",
 *   description="Failed response for update product API.",
 *   @OA\Xml(
 *     name="UpdateProductResponseFailed",
 *   ),
 * )
 */
class UpdateProductResponseFailed extends StoreProductResponseFailed {
    
}
