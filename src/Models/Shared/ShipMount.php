<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


/**
 * ShipMount - A mount is installed on the exterier of a ship.
 * 
 * @package emdash\SpaceTraders\Models\Shared
 * @access public
 */
class ShipMount
{
    /**
     * $deposits
     * 
     * @var ?array<\emdash\SpaceTraders\Models\Shared\ShipMountDeposits> $deposits
     */
	#[\JMS\Serializer\Annotation\SerializedName('deposits')]
    #[\JMS\Serializer\Annotation\Type('array<enum<emdash\SpaceTraders\Models\Shared\ShipMountDeposits>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $deposits = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The requirements for installation on a ship
     * 
     * @var \emdash\SpaceTraders\Models\Shared\ShipRequirements $requirements
     */
	#[\JMS\Serializer\Annotation\SerializedName('requirements')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\ShipRequirements')]
    public ShipRequirements $requirements;
    
	#[\JMS\Serializer\Annotation\SerializedName('strength')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $strength = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('enum<emdash\SpaceTraders\Models\Shared\ShipMountSymbol>')]
    public ShipMountSymbol $symbol;
    
	public function __construct()
	{
		$this->deposits = null;
		$this->description = null;
		$this->name = "";
		$this->requirements = new \emdash\SpaceTraders\Models\Shared\ShipRequirements();
		$this->strength = null;
		$this->symbol = \emdash\SpaceTraders\Models\Shared\ShipMountSymbol::MOUNT_GAS_SIPHON_I;
	}
}
