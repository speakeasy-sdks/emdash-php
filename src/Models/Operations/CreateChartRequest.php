<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;

use \emdash\SpaceTraders\Utils\SpeakeasyMetadata;
class CreateChartRequest
{
    /**
     * The symbol of the ship
     * 
     * @var string $shipSymbol
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=shipSymbol')]
    public string $shipSymbol;
    
	public function __construct()
	{
		$this->shipSymbol = "";
	}
}
