<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


/**
 * RefuelShip200ApplicationJSON - OK
 * 
 * @package emdash\SpaceTraders\Models\Operations
 * @access public
 */
class RefuelShip200ApplicationJSON
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Operations\RefuelShip200ApplicationJSONData')]
    public RefuelShip200ApplicationJSONData $data;
    
	public function __construct()
	{
		$this->data = new \emdash\SpaceTraders\Models\Operations\RefuelShip200ApplicationJSONData();
	}
}
