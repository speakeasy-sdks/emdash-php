<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


/** A rough estimate of the total supply of this good in the marketplace. */
enum MarketTradeGoodSupply: string
{
    case Scarce = 'SCARCE';
    case Limited = 'LIMITED';
    case Moderate = 'MODERATE';
    case Abundant = 'ABUNDANT';
}
