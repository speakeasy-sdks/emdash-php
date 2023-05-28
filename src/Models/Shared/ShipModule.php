<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


/**
 * ShipModule - A module can be installed in a ship and provides a set of capabilities such as storage space or quarters for crew. Module installations are permanent.
 * 
 * @package emdash\SpaceTraders\Models\Shared
 * @access public
 */
class ShipModule
{
	#[\JMS\Serializer\Annotation\SerializedName('capacity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $capacity = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('range')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $range = null;
    
    /**
     * The requirements for installation on a ship
     * 
     * @var \emdash\SpaceTraders\Models\Shared\ShipRequirements $requirements
     */
	#[\JMS\Serializer\Annotation\SerializedName('requirements')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\ShipRequirements')]
    public ShipRequirements $requirements;
    
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('enum<emdash\SpaceTraders\Models\Shared\ShipModuleSymbol>')]
    public ShipModuleSymbol $symbol;
    
	public function __construct()
	{
		$this->capacity = null;
		$this->description = null;
		$this->name = "";
		$this->range = null;
		$this->requirements = new \emdash\SpaceTraders\Models\Shared\ShipRequirements();
		$this->symbol = \emdash\SpaceTraders\Models\Shared\ShipModuleSymbol::MODULE_MINERAL_PROCESSOR_I;
	}
}
