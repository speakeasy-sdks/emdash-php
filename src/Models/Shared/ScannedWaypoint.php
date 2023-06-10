<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


/**
 * ScannedWaypoint - A waypoint is a location that ships can travel to such as a Planet, Moon or Space Station.
 * 
 * @package emdash\SpaceTraders\Models\Shared
 * @access public
 */
class ScannedWaypoint
{
    /**
     * The chart of a system or waypoint, which makes the location visible to other agents.
     * 
     * @var ?\emdash\SpaceTraders\Models\Shared\Chart $chart
     */
	#[\JMS\Serializer\Annotation\SerializedName('chart')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\Chart')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Chart $chart = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('faction')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\WaypointFaction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WaypointFaction $faction = null;
    
    /**
     * $orbitals
     * 
     * @var array<\emdash\SpaceTraders\Models\Shared\WaypointOrbital> $orbitals
     */
	#[\JMS\Serializer\Annotation\SerializedName('orbitals')]
    #[\JMS\Serializer\Annotation\Type('array<emdash\SpaceTraders\Models\Shared\WaypointOrbital>')]
    public array $orbitals;
    
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $symbol;
    
	#[\JMS\Serializer\Annotation\SerializedName('systemSymbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $systemSymbol;
    
    /**
     * The traits of the waypoint.
     * 
     * @var array<\emdash\SpaceTraders\Models\Shared\WaypointTrait> $traits
     */
	#[\JMS\Serializer\Annotation\SerializedName('traits')]
    #[\JMS\Serializer\Annotation\Type('array<emdash\SpaceTraders\Models\Shared\WaypointTrait>')]
    public array $traits;
    
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
		$this->chart = null;
		$this->faction = null;
		$this->orbitals = [];
		$this->symbol = "";
		$this->systemSymbol = "";
		$this->traits = [];
		$this->type = \emdash\SpaceTraders\Models\Shared\WaypointType::Planet;
		$this->x = 0;
		$this->y = 0;
	}
}
