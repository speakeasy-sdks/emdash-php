<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Operations;


/** The faction you choose determines your headquarters. */
enum RegisterRequestBodyFaction: string
{
    case COSMIC = 'COSMIC';
    case VOID = 'VOID';
    case GALACTIC = 'GALACTIC';
    case QUANTUM = 'QUANTUM';
    case DOMINION = 'DOMINION';
}
