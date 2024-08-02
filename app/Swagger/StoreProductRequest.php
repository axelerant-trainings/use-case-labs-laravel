<?php

namespace App\Swagger;

/**
 * @OA\Schema(
 *   title="StoreProductRequest",
 *   description="Store Product request body data",
 *   type="object",
 *   required={"name", "category_id", "supplier_id", "unit", "price"}
 * )
 */
class StoreProductRequest
{
    /**
     * @OA\Property(
     *   title="name",
     *   description="Name of the new product",
     *   example="Chai",
     * )
     *
     * @var string
     */
    public $name;
    
    /**
     * @OA\Property(
     *   title="supplier_id",
     *   description="ID of the supplier",
     *   example=1,
     * )
     *
     * @var integer
     */
    public $supplier_id;
    
    /**
     * @OA\Property(
     *   title="category_id",
     *   description="ID of the product category",
     *   example=1,
     * )
     *
     * @var integer
     */
    public $category_id;
    
    /**
     * @OA\Property(
     *   title="unit",
     *   description="Number of units",
     *   example=5,
     * )
     *
     * @var integer
     */
    public $unit;
    
    /**
     * @OA\Property(
     *   title="price",
     *   description="Unit price of the product",
     *   example=5.75
     * )
     *
     * @var double
     */
    public $price;
}
