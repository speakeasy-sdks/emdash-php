<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


class OrbitShipResponse
{
	
    public string $contentType;
    
    /**
     * The ship has successfully moved into orbit at it's current location.
     * 
     * @var ?\emdash\SpaceTraders\Models\Operations\OrbitShipOrbitShip200Response $orbitShip200Response
     */
	
    public ?OrbitShipOrbitShip200Response $orbitShip200Response = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->orbitShip200Response = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
