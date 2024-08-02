<?php

namespace App\Swagger;

/**
 * @OA\Schema(
 *   title="ProductResponseSuccess",
 *   description="Success response for a product.",
 *   @OA\Xml(
 *     name="ProductResponseSuccess",
 *   ),
 * )
 */
class ProductResponseSuccess {
    
    /**
     * @OA\Property(
     *   title="success",
     *   description="Indicator whether the action succeeded or failed.",
     *   example=true,
     * )
     *
     * @var boolean
     */
    public $success;
    
    /**
     * @OA\Property(
     *   title="message",
     *   description="A status message",
     *   example="Product record fetched.",
     * )
     *
     * @var string
     */
    public $message;
    
    /**
     * @OA\Property(
     *   title="Data",
     *   description="An array of product details",
     * )
     *
     * @var \App\Swagger\Model\Product
     */
    public $data;
}
