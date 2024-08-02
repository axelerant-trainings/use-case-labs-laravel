<?php

namespace  App\Swagger;

/**
 * @OA\Schema(
 *     title="ProductResource",
 *     description="Product resource",
 *     @OA\Xml(
 *         name="ProductResource",
 *     ),
 * )
 */
class ProductResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Swagger\Model\Product[]
     */
    private $data;
}
