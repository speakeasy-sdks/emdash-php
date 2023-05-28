<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


/**
 * ShipNavRoute - The routing information for the ship's most recent transit or current location.
 * 
 * @package emdash\SpaceTraders\Models\Shared
 * @access public
 */
class ShipNavRoute
{
    /**
     * The date time of the ship's arrival. If the ship is in-transit, this is the expected time of arrival.
     * 
     * @var \DateTime $arrival
     */
	#[\JMS\Serializer\Annotation\SerializedName('arrival')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $arrival;
    
    /**
     * The destination or departure of a ships nav route.
     * 
     * @var \emdash\SpaceTraders\Models\Shared\ShipNavRouteWaypoint $departure
     */
	#[\JMS\Serializer\Annotation\SerializedName('departure')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\ShipNavRouteWaypoint')]
    public ShipNavRouteWaypoint $departure;
    
    /**
     * The date time of the ship's departure.
     * 
     * @var \DateTime $departureTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('departureTime')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $departureTime;
    
    /**
     * The destination or departure of a ships nav route.
     * 
     * @var \emdash\SpaceTraders\Models\Shared\ShipNavRouteWaypoint $destination
     */
	#[\JMS\Serializer\Annotation\SerializedName('destination')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\ShipNavRouteWaypoint')]
    public ShipNavRouteWaypoint $destination;
    
	public function __construct()
	{
		$this->arrival = new \DateTime();
		$this->departure = new \emdash\SpaceTraders\Models\Shared\ShipNavRouteWaypoint();
		$this->departureTime = new \DateTime();
		$this->destination = new \emdash\SpaceTraders\Models\Shared\ShipNavRouteWaypoint();
	}
}
