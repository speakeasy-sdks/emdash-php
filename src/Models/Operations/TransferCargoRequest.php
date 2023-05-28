<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;

use \emdash\SpaceTraders\Utils\SpeakeasyMetadata;
class TransferCargoRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?TransferCargoTransferCargoRequest $requestBody = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=shipSymbol')]
    public string $shipSymbol;
    
	public function __construct()
	{
		$this->requestBody = null;
		$this->shipSymbol = "";
	}
}
