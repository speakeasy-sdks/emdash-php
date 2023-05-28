<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


class PurchaseShipRequestBody
{
	#[\JMS\Serializer\Annotation\SerializedName('shipType')]
    #[\JMS\Serializer\Annotation\Type('enum<emdash\SpaceTraders\Models\Shared\ShipType>')]
    public \emdash\SpaceTraders\Models\Shared\ShipType $shipType;
    
    /**
     * The symbol of the waypoint you want to purchase the ship at.
     * 
     * @var string $waypointSymbol
     */
	#[\JMS\Serializer\Annotation\SerializedName('waypointSymbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $waypointSymbol;
    
	public function __construct()
	{
		$this->shipType = \emdash\SpaceTraders\Models\Shared\ShipType::SHIP_PROBE;
		$this->waypointSymbol = "";
	}
}
