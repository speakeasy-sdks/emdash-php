<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


/** The current status of the ship */
enum ShipNavStatus: string
{
    case InTransit = 'IN_TRANSIT';
    case InOrbit = 'IN_ORBIT';
    case Docked = 'DOCKED';
}
