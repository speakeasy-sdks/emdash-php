<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


class NavigateShip200ApplicationJSONData
{
    /**
     * Details of the ship's fuel tanks including how much fuel was consumed during the last transit or action.
     * 
     * @var \emdash\SpaceTraders\Models\Shared\ShipFuel $fuel
     */
	#[\JMS\Serializer\Annotation\SerializedName('fuel')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\ShipFuel')]
    public \emdash\SpaceTraders\Models\Shared\ShipFuel $fuel;
    
    /**
     * The navigation information of the ship.
     * 
     * @var \emdash\SpaceTraders\Models\Shared\ShipNav $nav
     */
	#[\JMS\Serializer\Annotation\SerializedName('nav')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\ShipNav')]
    public \emdash\SpaceTraders\Models\Shared\ShipNav $nav;
    
	public function __construct()
	{
		$this->fuel = new \emdash\SpaceTraders\Models\Shared\ShipFuel();
		$this->nav = new \emdash\SpaceTraders\Models\Shared\ShipNav();
	}
}
