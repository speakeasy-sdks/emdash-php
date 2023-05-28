# factions

## Overview

Factions

### Available Operations

* [getFaction](#getfaction) - Get Faction
* [getFactions](#getfactions) - List Factions

## getFaction

View the details of a faction.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetFactionRequest;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetFactionRequest();
    $request->factionSymbol = 'delectus';

    $response = $sdk->factions->getFaction($request);

    if ($response->getFaction200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getFactions

List all discovered factions in the game.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetFactionsRequest;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetFactionsRequest();
    $request->limit = 272656;
    $request->page = 383441;

    $response = $sdk->factions->getFactions($request);

    if ($response->getFactions200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
