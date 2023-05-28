<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


/**
 * ScannedShipFrame - The frame of the ship.
 * 
 * @package emdash\SpaceTraders\Models\Shared
 * @access public
 */
class ScannedShipFrame
{
	#[\JMS\Serializer\Annotation\SerializedName('symbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $symbol;
    
	public function __construct()
	{
		$this->symbol = "";
	}
}
