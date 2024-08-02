<?php

namespace App\Swagger\Model;

/**
 * @OA\Schema(
 *   title="Product",
 *   description="A product model.",
 *   @OA\Xml(
 *     name="Product"
 *   ),
 * )
 *
 */
class Product
{
    /**
     * @OA\Property(
     *   title="ID",
     *   description="Primary key of the model",
     *   format="int64",
     *   example=1,
     * )
     *
     * @var integer
     */
    private $id;
    
    /**
     * @OA\Property(
     *   title="Name",
     *   description="Product name",
     *   format="string",
     *   example="Chai",
     * )
     *
     * @var string
     */
    public $name;
    
    /**
     * @OA\Property(
     *      title="Supplier ID",
     *      description="Supplier Id related to this product",
     *      format="int64",
     *      example=1
     * )
     *
     * @var integer
     */
    public $supplier_id;
    
    /**
     * @OA\Property(
     *     title="Supplier",
     *     description="Related supplier model"
     * )
     *
     * @var \App\Swagger\Model\Supplier
     */
    private $supplier;
    
    /**
     * @OA\Property(
     *      title="Category ID",
     *      description="Category Id related to this product",
     *      format="int64",
     *      example=1
     * )
     *
     * @var integer
     */
    public $category_id;
    
    /**
     * @OA\Property(
     *     title="Category",
     *     description="Related category model"
     * )
     *
     * @var \App\Swagger\Model\Category
     */
    private $category;
    
    /**
     * @OA\Property(
     *   title="Unit",
     *   description="Number of units",
     *   format="int64",
     *   example=10,
     * )
     *
     * @var integer
     */
    public $unit;
    
    /**
     * @OA\Property(
     *   title="Price",
     *   description="Unit price of this product",
     *   format="double",
     *   example=100.25,
     * )
     *
     * @var double
     */
    public $price;
    
    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     format="datetime",
     *     type="string",
     *     example="2020-01-27 17:50:45",
     * )
     *
     * @var \DateTime
     */
    private $created_at;
    
    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     format="datetime",
     *     type="string",
     *     example="2020-01-27 17:50:45",
     * )
     *
     * @var \DateTime
     */
    private $updated_at;
}
