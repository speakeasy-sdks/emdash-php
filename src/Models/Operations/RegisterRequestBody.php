<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


class RegisterRequestBody
{
    /**
     * Your email address. This is used if you reserved your call sign between resets.
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * The faction you choose determines your headquarters.
     * 
     * @var \emdash\SpaceTraders\Models\Operations\RegisterRequestBodyFaction $faction
     */
	#[\JMS\Serializer\Annotation\SerializedName('faction')]
    #[\JMS\Serializer\Annotation\Type('enum<emdash\SpaceTraders\Models\Operations\RegisterRequestBodyFaction>')]
    public RegisterRequestBodyFaction $faction;
    
    /**
     * How other agents will see your ships and information.
     * 
     * @var string $symbol
     */
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $symbol;
    
	public function __construct()
	{
		$this->email = null;
		$this->faction = \emdash\SpaceTraders\Models\Operations\RegisterRequestBodyFaction::COSMIC;
		$this->symbol = "";
	}
}
