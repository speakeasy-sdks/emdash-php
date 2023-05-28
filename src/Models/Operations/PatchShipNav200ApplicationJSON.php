<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


/**
 * PatchShipNav200ApplicationJSON - The updated nav status of the ship.
 * 
 * @package emdash\SpaceTraders\Models\Operations
 * @access public
 */
class PatchShipNav200ApplicationJSON
{
    /**
     * The navigation information of the ship.
     * 
     * @var \emdash\SpaceTraders\Models\Shared\ShipNav $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\ShipNav')]
    public \emdash\SpaceTraders\Models\Shared\ShipNav $data;
    
	public function __construct()
	{
		$this->data = new \emdash\SpaceTraders\Models\Shared\ShipNav();
	}
}
