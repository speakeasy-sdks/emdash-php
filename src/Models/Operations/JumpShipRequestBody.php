<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


class JumpShipRequestBody
{
    /**
     * The system symbol to jump to.
     * 
     * @var string $systemSymbol
     */
	#[\JMS\Serializer\Annotation\SerializedName('systemSymbol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $systemSymbol;
    
	public function __construct()
	{
		$this->systemSymbol = "";
	}
}
