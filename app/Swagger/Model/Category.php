<?php

namespace App\Swagger\Model;

/**
 * @OA\Schema(
 *   title="Category",
 *   description="A category model.",
 *   @OA\Xml(
 *     name="Category"
 *   ),
 * )
 *
 */
class Category
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
     *   description="Category name",
     *   format="string",
     *   example="Beverages",
     * )
     *
     * @var string
     */
    public $name;
    
    /**
     * @OA\Property(
     *   title="Description",
     *   description="Category description",
     *   format="string",
     *   example="Soft drinks, coffees, teas, beers, juices and ales",
     * )
     *
     * @var string
     */
    public $description;
    
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
