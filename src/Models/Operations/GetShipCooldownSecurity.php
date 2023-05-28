<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;

use \emdash\SpaceTraders\Utils\SpeakeasyMetadata;
class GetShipCooldownSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer,name=Authorization')]
    public string $agentToken;
    
	public function __construct()
	{
		$this->agentToken = "";
	}
}
