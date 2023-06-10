<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


class SystemWaypoint
{
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $symbol;
    
    /**
     * The type of waypoint.
     * 
     * @var \emdash\SpaceTraders\Models\Shared\WaypointType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<emdash\SpaceTraders\Models\Shared\WaypointType>')]
    public WaypointType $type;
    
	#[\JMS\Serializer\Annotation\SerializedName('x')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $x;
    
	#[\JMS\Serializer\Annotation\SerializedName('y')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $y;
    
	public function __construct()
	{
		$this->symbol = "";
		$this->type = \emdash\SpaceTraders\Models\Shared\WaypointType::Planet;
		$this->x = 0;
		$this->y = 0;
	}
}
