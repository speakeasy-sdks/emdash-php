<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


class Agent
{
	#[\JMS\Serializer\Annotation\SerializedName('accountId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $accountId;
    
    /**
     * The number of credits the agent has available. Credits can be negative if funds have been overdrawn.
     * 
     * @var int $credits
     */
	#[\JMS\Serializer\Annotation\SerializedName('credits')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $credits;
    
    /**
     * The headquarters of the agent.
     * 
     * @var string $headquarters
     */
	#[\JMS\Serializer\Annotation\SerializedName('headquarters')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $headquarters;
    
    /**
     * The faction the agent started with.
     * 
     * @var string $startingFaction
     */
	#[\JMS\Serializer\Annotation\SerializedName('startingFaction')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $startingFaction;
    
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $symbol;
    
	public function __construct()
	{
		$this->accountId = "";
		$this->credits = 0;
		$this->headquarters = "";
		$this->startingFaction = "";
		$this->symbol = "";
	}
}
