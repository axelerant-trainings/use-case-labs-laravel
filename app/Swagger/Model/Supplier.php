<?php

namespace App\Swagger\Model;

/**
 * @OA\Schema(
 *   title="Supplier",
 *   description="A supplier model.",
 *   @OA\Xml(
 *     name="Supplier"
 *   ),
 * )
 *
 */
class Supplier
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
     *   description="Supplier name",
     *   format="string",
     *   example="Grandma Kelly's Homestead",
     * )
     *
     * @var string
     */
    public $name;
    
    /**
     * @OA\Property(
     *   title="Contact name",
     *   description="Contact name of this supplier",
     *   format="string",
     *   example="Regina Murphy",
     * )
     *
     * @var string
     */
    public $contact_name;
    
    /**
     * @OA\Property(
     *   title="Address",
     *   description="Supplier's street address",
     *   format="string",
     *   example="707 Oxford Rd.",
     * )
     *
     * @var string
     */
    public $address;
    
    /**
     * @OA\Property(
     *   title="City",
     *   description="Supplier's city",
     *   format="string",
     *   example="Ann Arbor",
     * )
     *
     * @var string
     */
    public $city;
    
    /**
     * @OA\Property(
     *   title="Postal code",
     *   description="Supplier's postal/zip code",
     *   format="string",
     *   example="48104",
     * )
     *
     * @var string
     */
    public $postal_code;
    
    /**
     * @OA\Property(
     *   title="Country",
     *   description="Supplier's country",
     *   format="string",
     *   example="USA",
     * )
     *
     * @var string
     */
    public $country;
    
    /**
     * @OA\Property(
     *   title="Phone",
     *   description="Supplier's phone number",
     *   format="string",
     *   example="(313) 555-5735",
     * )
     *
     * @var string
     */
    public $phone;
    
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
