<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


class ContractPayment
{
    /**
     * The amount of credits received up front for accepting the contract.
     * 
     * @var int $onAccepted
     */
	#[\JMS\Serializer\Annotation\SerializedName('onAccepted')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $onAccepted;
    
    /**
     * The amount of credits received when the contract is fulfilled.
     * 
     * @var int $onFulfilled
     */
	#[\JMS\Serializer\Annotation\SerializedName('onFulfilled')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $onFulfilled;
    
	public function __construct()
	{
		$this->onAccepted = 0;
		$this->onFulfilled = 0;
	}
}
