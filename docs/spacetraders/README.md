# SpaceTraders SDK

## Overview

SpaceTraders is an open-universe game and learning platform that offers a set of HTTP endpoints to control a fleet of ships and explore a multiplayer universe.

The API is documented using [OpenAPI](https://github.com/SpaceTradersAPI/api-docs). You can send your first request right here in your browser to check the status of the game server.

```json http
{
  "method": "GET",
  "url": "https://api.spacetraders.io/v2",
}
```

Unlike a traditional game, SpaceTraders does not have a first-party client or app to play the game. Instead, you can use the API to build your own client, write a script to automate your ships, or try an app built by the community.

We have a [Discord channel](https://discord.com/invite/jh6zurdWk5) where you can share your projects, ask questions, and get help from other players.




### Available Operations

* [getStatus](#getstatus) - Get Status
* [register](#register) - Register New Agent

## getStatus

Return the status of the game server.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $response = $sdk->spaceTraders->getStatus();

    if ($response->getStatus200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## register

Creates a new agent and ties it to a temporary Account.

The agent symbol is a 3-14 character string that will represent your agent. This symbol will prefix the symbol of every ship you own. Agent symbols will be cast to all uppercase characters.

A new agent will be granted an authorization token, a contract with their starting faction, a command ship with a jump drive, and one hundred thousand credits.

> #### Keep your token safe and secure
>
> Save your token during the alpha phase. There is no way to regenerate this token without starting a new agent. In the future you will be able to generate and manage your tokens from the SpaceTraders website.

You can accept your contract using the `/my/contracts/{contractId}/accept` endpoint. You will want to navigate your command ship to a nearby asteroid field and execute the `/my/ships/{shipSymbol}/extract` endpoint to mine various types of ores and minerals.

Return to the contract destination and execute the `/my/ships/{shipSymbol}/deliver` endpoint to deposit goods into the contract.

When your contract is fulfilled, you can call `/my/contracts/{contractId}/fulfill` to retrieve payment.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\RegisterRequestBody;
use \emdash\SpaceTraders\Models\Operations\RegisterRequestBodyFaction;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new RegisterRequestBody();
    $request->email = 'Larue_Rau85@yahoo.com';
    $request->faction = RegisterRequestBodyFaction::GALACTIC;
    $request->symbol = 'BADGER';

    $response = $sdk->spaceTraders->register($request);

    if ($response->register201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
