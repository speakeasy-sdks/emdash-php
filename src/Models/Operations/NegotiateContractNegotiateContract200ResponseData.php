<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


class NegotiateContractNegotiateContract200ResponseData
{
	#[\JMS\Serializer\Annotation\SerializedName('contract')]
    #[\JMS\Serializer\Annotation\Type('emdash\SpaceTraders\Models\Shared\Contract')]
    public \emdash\SpaceTraders\Models\Shared\Contract $contract;
    
	public function __construct()
	{
		$this->contract = new \emdash\SpaceTraders\Models\Shared\Contract();
	}
}
