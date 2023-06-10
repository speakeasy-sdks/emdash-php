<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


class FactionTrait
{
    /**
     * A description of the trait.
     * 
     * @var string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    /**
     * The name of the trait.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The unique identifier of the trait.
     * 
     * @var \emdash\SpaceTraders\Models\Shared\FactionTraitSymbol $symbol
     */
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('enum<emdash\SpaceTraders\Models\Shared\FactionTraitSymbol>')]
    public FactionTraitSymbol $symbol;
    
	public function __construct()
	{
		$this->description = "";
		$this->name = "";
		$this->symbol = \emdash\SpaceTraders\Models\Shared\FactionTraitSymbol::Bureaucratic;
	}
}
