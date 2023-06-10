<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


class System
{
    /**
     * $factions
     * 
     * @var array<\emdash\SpaceTraders\Models\Shared\SystemFaction> $factions
     */
	#[\JMS\Serializer\Annotation\SerializedName('factions')]
    #[\JMS\Serializer\Annotation\Type('array<emdash\SpaceTraders\Models\Shared\SystemFaction>')]
    public array $factions;
    
	#[\JMS\Serializer\Annotation\SerializedName('sectorSymbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sectorSymbol;
    
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $symbol;
    
    /**
     * The type of waypoint.
     * 
     * @var \emdash\SpaceTraders\Models\Shared\SystemType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<emdash\SpaceTraders\Models\Shared\SystemType>')]
    public SystemType $type;
    
    /**
     * $waypoints
     * 
     * @var array<\emdash\SpaceTraders\Models\Shared\SystemWaypoint> $waypoints
     */
	#[\JMS\Serializer\Annotation\SerializedName('waypoints')]
    #[\JMS\Serializer\Annotation\Type('array<emdash\SpaceTraders\Models\Shared\SystemWaypoint>')]
    public array $waypoints;
    
	#[\JMS\Serializer\Annotation\SerializedName('x')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $x;
    
	#[\JMS\Serializer\Annotation\SerializedName('y')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $y;
    
	public function __construct()
	{
		$this->factions = [];
		$this->sectorSymbol = "";
		$this->symbol = "";
		$this->type = \emdash\SpaceTraders\Models\Shared\SystemType::NeutronStar;
		$this->waypoints = [];
		$this->x = 0;
		$this->y = 0;
	}
}
