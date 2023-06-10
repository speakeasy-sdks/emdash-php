<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders\Models\Shared;


/** The type of waypoint. */
enum SystemType: string
{
    case NeutronStar = 'NEUTRON_STAR';
    case RedStar = 'RED_STAR';
    case OrangeStar = 'ORANGE_STAR';
    case BlueStar = 'BLUE_STAR';
    case YoungStar = 'YOUNG_STAR';
    case WhiteDwarf = 'WHITE_DWARF';
    case BlackHole = 'BLACK_HOLE';
    case Hypergiant = 'HYPERGIANT';
    case Nebula = 'NEBULA';
    case Unstable = 'UNSTABLE';
}
