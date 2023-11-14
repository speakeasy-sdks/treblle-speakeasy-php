<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace OpenAPI\OpenAPI\Models\Components;


/**
 * Order - An order for a drink or ingredient.
 * 
 * @package OpenAPI\OpenAPI\Models\Components
 * @access public
 */
class Order
{
    /**
     * The product code of the drink or ingredient.
     * 
     * @var string $productCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('productCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $productCode;
    
    /**
     * The number of units of the drink or ingredient to order.
     * 
     * @var int $quantity
     */
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $quantity;
    
    /**
     * The status of the order.
     * 
     * @var \OpenAPI\OpenAPI\Models\Components\Status $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<OpenAPI\OpenAPI\Models\Components\Status>')]
    public Status $status;
    
    /**
     * The type of order.
     * 
     * @var \OpenAPI\OpenAPI\Models\Components\OrderType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<OpenAPI\OpenAPI\Models\Components\OrderType>')]
    public OrderType $type;
    
	public function __construct()
	{
		$this->productCode = "";
		$this->quantity = 0;
		$this->status = \OpenAPI\OpenAPI\Models\Components\Status::Pending;
		$this->type = \OpenAPI\OpenAPI\Models\Components\OrderType::Drink;
	}
}
