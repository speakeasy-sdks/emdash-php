# fleet

## Overview

Fleet

### Available Operations

* [createChart](#createchart) - Create Chart
* [createShipShipScan](#createshipshipscan) - Scan Ships
* [createShipSystemScan](#createshipsystemscan) - Scan Systems
* [createShipWaypointScan](#createshipwaypointscan) - Scan Waypoints
* [createSurvey](#createsurvey) - Create Survey
* [dockShip](#dockship) - Dock Ship
* [extractResources](#extractresources) - Extract Resources
* [getMyShip](#getmyship) - Get Ship
* [getMyShipCargo](#getmyshipcargo) - Get Ship Cargo
* [getMyShips](#getmyships) - List Ships
* [getShipCooldown](#getshipcooldown) - Get Ship Cooldown
* [getShipNav](#getshipnav) - Get Ship Nav
* [jettison](#jettison) - Jettison Cargo
* [jumpShip](#jumpship) - Jump Ship
* [navigateShip](#navigateship) - Navigate Ship
* [negotiateContract](#negotiatecontract) - Negotiate Contract
* [orbitShip](#orbitship) - Orbit Ship
* [patchShipNav](#patchshipnav) - Patch Ship Nav
* [purchaseCargo](#purchasecargo) - Purchase Cargo
* [purchaseShip](#purchaseship) - Purchase Ship
* [refuelShip](#refuelship) - Refuel Ship
* [sellCargo](#sellcargo) - Sell Cargo
* [shipRefine](#shiprefine) - Ship Refine
* [transferCargo](#transfercargo) - Transfer Cargo
* [warpShip](#warpship) - Warp Ship

## createChart

Command a ship to chart the current waypoint.

Waypoints in the universe are uncharted by default. These locations will not show up in the API until they have been charted by a ship.

Charting a location will record your agent as the one who created the chart.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\CreateChartRequest;
use \emdash\SpaceTraders\Models\Operations\CreateChartSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new CreateChartRequest();
    $request->shipSymbol = 'molestiae';

    $requestSecurity = new CreateChartSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->createChart($request, $requestSecurity);

    if ($response->createChart201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\emdash\SpaceTraders\Models\Operations\CreateChartRequest](../../models/operations/CreateChartRequest.md)   | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `security`                                                                                                   | [\emdash\SpaceTraders\Models\Operations\CreateChartSecurity](../../models/operations/CreateChartSecurity.md) | :heavy_check_mark:                                                                                           | The security requirements to use for the request.                                                            |


### Response

**[?\emdash\SpaceTraders\Models\Operations\CreateChartResponse](../../models/operations/CreateChartResponse.md)**


## createShipShipScan

Activate your ship's sensor arrays to scan for ship information.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\CreateShipShipScanRequest;
use \emdash\SpaceTraders\Models\Operations\CreateShipShipScanSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new CreateShipShipScanRequest();
    $request->shipSymbol = 'minus';

    $requestSecurity = new CreateShipShipScanSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->createShipShipScan($request, $requestSecurity);

    if ($response->createShipShipScan201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\emdash\SpaceTraders\Models\Operations\CreateShipShipScanRequest](../../models/operations/CreateShipShipScanRequest.md)   | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `security`                                                                                                                 | [\emdash\SpaceTraders\Models\Operations\CreateShipShipScanSecurity](../../models/operations/CreateShipShipScanSecurity.md) | :heavy_check_mark:                                                                                                         | The security requirements to use for the request.                                                                          |


### Response

**[?\emdash\SpaceTraders\Models\Operations\CreateShipShipScanResponse](../../models/operations/CreateShipShipScanResponse.md)**


## createShipSystemScan

Activate your ship's sensor arrays to scan for system information.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\CreateShipSystemScanRequest;
use \emdash\SpaceTraders\Models\Operations\CreateShipSystemScanSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new CreateShipSystemScanRequest();
    $request->shipSymbol = 'placeat';

    $requestSecurity = new CreateShipSystemScanSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->createShipSystemScan($request, $requestSecurity);

    if ($response->createShipSystemScan201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\emdash\SpaceTraders\Models\Operations\CreateShipSystemScanRequest](../../models/operations/CreateShipSystemScanRequest.md)   | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |
| `security`                                                                                                                     | [\emdash\SpaceTraders\Models\Operations\CreateShipSystemScanSecurity](../../models/operations/CreateShipSystemScanSecurity.md) | :heavy_check_mark:                                                                                                             | The security requirements to use for the request.                                                                              |


### Response

**[?\emdash\SpaceTraders\Models\Operations\CreateShipSystemScanResponse](../../models/operations/CreateShipSystemScanResponse.md)**


## createShipWaypointScan

Activate your ship's sensor arrays to scan for waypoint information.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\CreateShipWaypointScanRequest;
use \emdash\SpaceTraders\Models\Operations\CreateShipWaypointScanSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new CreateShipWaypointScanRequest();
    $request->shipSymbol = 'voluptatum';

    $requestSecurity = new CreateShipWaypointScanSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->createShipWaypointScan($request, $requestSecurity);

    if ($response->createShipWaypointScan201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\emdash\SpaceTraders\Models\Operations\CreateShipWaypointScanRequest](../../models/operations/CreateShipWaypointScanRequest.md)   | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |
| `security`                                                                                                                         | [\emdash\SpaceTraders\Models\Operations\CreateShipWaypointScanSecurity](../../models/operations/CreateShipWaypointScanSecurity.md) | :heavy_check_mark:                                                                                                                 | The security requirements to use for the request.                                                                                  |


### Response

**[?\emdash\SpaceTraders\Models\Operations\CreateShipWaypointScanResponse](../../models/operations/CreateShipWaypointScanResponse.md)**


## createSurvey

If you want to target specific yields for an extraction, you can survey a waypoint, such as an asteroid field, and send the survey in the body of the extract request. Each survey may have multiple deposits, and if a symbol shows up more than once, that indicates a higher chance of extracting that resource.

Your ship will enter a cooldown between consecutive survey requests. Surveys will eventually expire after a period of time. Multiple ships can use the same survey for extraction.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\CreateSurveyRequest;
use \emdash\SpaceTraders\Models\Operations\CreateSurveySecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new CreateSurveyRequest();
    $request->shipSymbol = 'iusto';

    $requestSecurity = new CreateSurveySecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->createSurvey($request, $requestSecurity);

    if ($response->createSurvey201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\emdash\SpaceTraders\Models\Operations\CreateSurveyRequest](../../models/operations/CreateSurveyRequest.md)   | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `security`                                                                                                     | [\emdash\SpaceTraders\Models\Operations\CreateSurveySecurity](../../models/operations/CreateSurveySecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |


### Response

**[?\emdash\SpaceTraders\Models\Operations\CreateSurveyResponse](../../models/operations/CreateSurveyResponse.md)**


## dockShip

Attempt to dock your ship at it's current location. Docking will only succeed if the waypoint is a dockable location, and your ship is capable of docking at the time of the request.

The endpoint is idempotent - successive calls will succeed even if the ship is already docked.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\DockShipRequest;
use \emdash\SpaceTraders\Models\Operations\DockShipSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new DockShipRequest();
    $request->shipSymbol = 'excepturi';

    $requestSecurity = new DockShipSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->dockShip($request, $requestSecurity);

    if ($response->dockShip200Response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\emdash\SpaceTraders\Models\Operations\DockShipRequest](../../models/operations/DockShipRequest.md)   | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `security`                                                                                             | [\emdash\SpaceTraders\Models\Operations\DockShipSecurity](../../models/operations/DockShipSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |


### Response

**[?\emdash\SpaceTraders\Models\Operations\DockShipResponse](../../models/operations/DockShipResponse.md)**


## extractResources

Extract resources from the waypoint into your ship. Send an optional survey as the payload to target specific yields.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\ExtractResourcesRequest;
use \emdash\SpaceTraders\Models\Operations\ExtractResourcesRequestBody;
use \emdash\SpaceTraders\Models\Shared\Survey;
use \emdash\SpaceTraders\Models\Shared\SurveyDeposit;
use \emdash\SpaceTraders\Models\Shared\SurveySize;
use \emdash\SpaceTraders\Models\Operations\ExtractResourcesSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new ExtractResourcesRequest();
    $request->requestBody = new ExtractResourcesRequestBody();
    $request->requestBody->survey = new Survey();
    $request->requestBody->survey->deposits = [
        new SurveyDeposit(),
        new SurveyDeposit(),
    ];
    $request->requestBody->survey->expiration = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-06-29T11:50:59.674Z');
    $request->requestBody->survey->signature = 'ab';
    $request->requestBody->survey->size = SurveySize::Moderate;
    $request->requestBody->survey->symbol = 'veritatis';
    $request->shipSymbol = 'deserunt';

    $requestSecurity = new ExtractResourcesSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->extractResources($request, $requestSecurity);

    if ($response->extractResources201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\emdash\SpaceTraders\Models\Operations\ExtractResourcesRequest](../../models/operations/ExtractResourcesRequest.md)   | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |
| `security`                                                                                                             | [\emdash\SpaceTraders\Models\Operations\ExtractResourcesSecurity](../../models/operations/ExtractResourcesSecurity.md) | :heavy_check_mark:                                                                                                     | The security requirements to use for the request.                                                                      |


### Response

**[?\emdash\SpaceTraders\Models\Operations\ExtractResourcesResponse](../../models/operations/ExtractResourcesResponse.md)**


## getMyShip

Retrieve the details of your ship.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetMyShipRequest;
use \emdash\SpaceTraders\Models\Operations\GetMyShipSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetMyShipRequest();
    $request->shipSymbol = 'perferendis';

    $requestSecurity = new GetMyShipSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->getMyShip($request, $requestSecurity);

    if ($response->getMyShip200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\emdash\SpaceTraders\Models\Operations\GetMyShipRequest](../../models/operations/GetMyShipRequest.md)   | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `security`                                                                                               | [\emdash\SpaceTraders\Models\Operations\GetMyShipSecurity](../../models/operations/GetMyShipSecurity.md) | :heavy_check_mark:                                                                                       | The security requirements to use for the request.                                                        |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetMyShipResponse](../../models/operations/GetMyShipResponse.md)**


## getMyShipCargo

Retrieve the cargo of your ship.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetMyShipCargoRequest;
use \emdash\SpaceTraders\Models\Operations\GetMyShipCargoSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetMyShipCargoRequest();
    $request->shipSymbol = 'ipsam';

    $requestSecurity = new GetMyShipCargoSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->getMyShipCargo($request, $requestSecurity);

    if ($response->getMyShipCargo200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\emdash\SpaceTraders\Models\Operations\GetMyShipCargoRequest](../../models/operations/GetMyShipCargoRequest.md)   | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |
| `security`                                                                                                         | [\emdash\SpaceTraders\Models\Operations\GetMyShipCargoSecurity](../../models/operations/GetMyShipCargoSecurity.md) | :heavy_check_mark:                                                                                                 | The security requirements to use for the request.                                                                  |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetMyShipCargoResponse](../../models/operations/GetMyShipCargoResponse.md)**


## getMyShips

Retrieve all of your ships.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetMyShipsRequest;
use \emdash\SpaceTraders\Models\Operations\GetMyShipsSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetMyShipsRequest();
    $request->limit = 832620;
    $request->page = 957156;

    $requestSecurity = new GetMyShipsSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->getMyShips($request, $requestSecurity);

    if ($response->getMyShips200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetMyShipsRequest](../../models/operations/GetMyShipsRequest.md)   | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `security`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetMyShipsSecurity](../../models/operations/GetMyShipsSecurity.md) | :heavy_check_mark:                                                                                         | The security requirements to use for the request.                                                          |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetMyShipsResponse](../../models/operations/GetMyShipsResponse.md)**


## getShipCooldown

Retrieve the details of your ship's reactor cooldown. Some actions such as activating your jump drive, scanning, or extracting resources taxes your reactor and results in a cooldown.

Your ship cannot perform additional actions until your cooldown has expired. The duration of your cooldown is relative to the power consumption of the related modules or mounts for the action taken.

Response returns a 204 status code (no-content) when the ship has no cooldown.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetShipCooldownRequest;
use \emdash\SpaceTraders\Models\Operations\GetShipCooldownSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetShipCooldownRequest();
    $request->shipSymbol = 'quo';

    $requestSecurity = new GetShipCooldownSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->getShipCooldown($request, $requestSecurity);

    if ($response->getShipCooldown200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\emdash\SpaceTraders\Models\Operations\GetShipCooldownRequest](../../models/operations/GetShipCooldownRequest.md)   | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [\emdash\SpaceTraders\Models\Operations\GetShipCooldownSecurity](../../models/operations/GetShipCooldownSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetShipCooldownResponse](../../models/operations/GetShipCooldownResponse.md)**


## getShipNav

Get the current nav status of a ship.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetShipNavRequest;
use \emdash\SpaceTraders\Models\Operations\GetShipNavSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetShipNavRequest();
    $request->shipSymbol = 'odit';

    $requestSecurity = new GetShipNavSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->getShipNav($request, $requestSecurity);

    if ($response->getShipNav200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetShipNavRequest](../../models/operations/GetShipNavRequest.md)   | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `security`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetShipNavSecurity](../../models/operations/GetShipNavSecurity.md) | :heavy_check_mark:                                                                                         | The security requirements to use for the request.                                                          |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetShipNavResponse](../../models/operations/GetShipNavResponse.md)**


## jettison

Jettison cargo from your ship's cargo hold.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\JettisonRequest;
use \emdash\SpaceTraders\Models\Operations\JettisonRequestBody;
use \emdash\SpaceTraders\Models\Operations\JettisonSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new JettisonRequest();
    $request->requestBody = new JettisonRequestBody();
    $request->requestBody->symbol = 'at';
    $request->requestBody->units = 870088;
    $request->shipSymbol = 'maiores';

    $requestSecurity = new JettisonSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->jettison($request, $requestSecurity);

    if ($response->jettison200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\emdash\SpaceTraders\Models\Operations\JettisonRequest](../../models/operations/JettisonRequest.md)   | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `security`                                                                                             | [\emdash\SpaceTraders\Models\Operations\JettisonSecurity](../../models/operations/JettisonSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |


### Response

**[?\emdash\SpaceTraders\Models\Operations\JettisonResponse](../../models/operations/JettisonResponse.md)**


## jumpShip

Jump your ship instantly to a target system. When used while in orbit or docked to a jump gate waypoint, any ship can use this command. When used elsewhere, jumping requires a jump drive unit and consumes a unit of antimatter (which needs to be in your cargo).

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\JumpShipRequest;
use \emdash\SpaceTraders\Models\Operations\JumpShipRequestBody;
use \emdash\SpaceTraders\Models\Operations\JumpShipSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new JumpShipRequest();
    $request->requestBody = new JumpShipRequestBody();
    $request->requestBody->systemSymbol = 'molestiae';
    $request->shipSymbol = 'quod';

    $requestSecurity = new JumpShipSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->jumpShip($request, $requestSecurity);

    if ($response->jumpShip200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\emdash\SpaceTraders\Models\Operations\JumpShipRequest](../../models/operations/JumpShipRequest.md)   | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `security`                                                                                             | [\emdash\SpaceTraders\Models\Operations\JumpShipSecurity](../../models/operations/JumpShipSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |


### Response

**[?\emdash\SpaceTraders\Models\Operations\JumpShipResponse](../../models/operations/JumpShipResponse.md)**


## navigateShip

Navigate to a target destination. The destination must be located within the same system as the ship. Navigating will consume the necessary fuel and supplies from the ship's manifest, and will pay out crew wages from the agent's account.

The returned response will detail the route information including the expected time of arrival. Most ship actions are unavailable until the ship has arrived at it's destination.

To travel between systems, see the ship's warp or jump actions.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\NavigateShipRequest;
use \emdash\SpaceTraders\Models\Operations\NavigateShipRequestBody;
use \emdash\SpaceTraders\Models\Operations\NavigateShipSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new NavigateShipRequest();
    $request->requestBody = new NavigateShipRequestBody();
    $request->requestBody->waypointSymbol = 'quod';
    $request->shipSymbol = 'esse';

    $requestSecurity = new NavigateShipSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->navigateShip($request, $requestSecurity);

    if ($response->navigateShip200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\emdash\SpaceTraders\Models\Operations\NavigateShipRequest](../../models/operations/NavigateShipRequest.md)   | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `security`                                                                                                     | [\emdash\SpaceTraders\Models\Operations\NavigateShipSecurity](../../models/operations/NavigateShipSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |


### Response

**[?\emdash\SpaceTraders\Models\Operations\NavigateShipResponse](../../models/operations/NavigateShipResponse.md)**


## negotiateContract

Negotiate Contract

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\NegotiateContractRequest;
use \emdash\SpaceTraders\Models\Operations\NegotiateContractSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new NegotiateContractRequest();
    $request->requestBody = 'totam';
    $request->shipSymbol = 'porro';

    $requestSecurity = new NegotiateContractSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->negotiateContract($request, $requestSecurity);

    if ($response->negotiateContract200Response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\emdash\SpaceTraders\Models\Operations\NegotiateContractRequest](../../models/operations/NegotiateContractRequest.md)   | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `security`                                                                                                               | [\emdash\SpaceTraders\Models\Operations\NegotiateContractSecurity](../../models/operations/NegotiateContractSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |


### Response

**[?\emdash\SpaceTraders\Models\Operations\NegotiateContractResponse](../../models/operations/NegotiateContractResponse.md)**


## orbitShip

Attempt to move your ship into orbit at it's current location. The request will only succeed if your ship is capable of moving into orbit at the time of the request.

The endpoint is idempotent - successive calls will succeed even if the ship is already in orbit.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\OrbitShipRequest;
use \emdash\SpaceTraders\Models\Operations\OrbitShipSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new OrbitShipRequest();
    $request->shipSymbol = 'dolorum';

    $requestSecurity = new OrbitShipSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->orbitShip($request, $requestSecurity);

    if ($response->orbitShip200Response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\emdash\SpaceTraders\Models\Operations\OrbitShipRequest](../../models/operations/OrbitShipRequest.md)   | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `security`                                                                                               | [\emdash\SpaceTraders\Models\Operations\OrbitShipSecurity](../../models/operations/OrbitShipSecurity.md) | :heavy_check_mark:                                                                                       | The security requirements to use for the request.                                                        |


### Response

**[?\emdash\SpaceTraders\Models\Operations\OrbitShipResponse](../../models/operations/OrbitShipResponse.md)**


## patchShipNav

Update the nav data of a ship, such as the flight mode.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\PatchShipNavRequest;
use \emdash\SpaceTraders\Models\Operations\PatchShipNavRequestBody;
use \emdash\SpaceTraders\Models\Shared\ShipNavFlightMode;
use \emdash\SpaceTraders\Models\Operations\PatchShipNavSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new PatchShipNavRequest();
    $request->requestBody = new PatchShipNavRequestBody();
    $request->requestBody->flightMode = ShipNavFlightMode::Drift;
    $request->shipSymbol = 'nam';

    $requestSecurity = new PatchShipNavSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->patchShipNav($request, $requestSecurity);

    if ($response->patchShipNav200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\emdash\SpaceTraders\Models\Operations\PatchShipNavRequest](../../models/operations/PatchShipNavRequest.md)   | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `security`                                                                                                     | [\emdash\SpaceTraders\Models\Operations\PatchShipNavSecurity](../../models/operations/PatchShipNavSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |


### Response

**[?\emdash\SpaceTraders\Models\Operations\PatchShipNavResponse](../../models/operations/PatchShipNavResponse.md)**


## purchaseCargo

Purchase cargo.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\PurchaseCargoRequest;
use \emdash\SpaceTraders\Models\Operations\PurchaseCargoPurchaseCargoRequest;
use \emdash\SpaceTraders\Models\Operations\PurchaseCargoSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new PurchaseCargoRequest();
    $request->requestBody = new PurchaseCargoPurchaseCargoRequest();
    $request->requestBody->symbol = 'officia';
    $request->requestBody->units = 582020;
    $request->shipSymbol = 'fugit';

    $requestSecurity = new PurchaseCargoSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->purchaseCargo($request, $requestSecurity);

    if ($response->purchaseCargo201Response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\emdash\SpaceTraders\Models\Operations\PurchaseCargoRequest](../../models/operations/PurchaseCargoRequest.md)   | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |
| `security`                                                                                                       | [\emdash\SpaceTraders\Models\Operations\PurchaseCargoSecurity](../../models/operations/PurchaseCargoSecurity.md) | :heavy_check_mark:                                                                                               | The security requirements to use for the request.                                                                |


### Response

**[?\emdash\SpaceTraders\Models\Operations\PurchaseCargoResponse](../../models/operations/PurchaseCargoResponse.md)**


## purchaseShip

Purchase a ship

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\PurchaseShipRequestBody;
use \emdash\SpaceTraders\Models\Shared\ShipType;
use \emdash\SpaceTraders\Models\Operations\PurchaseShipSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new PurchaseShipRequestBody();
    $request->shipType = ShipType::ShipExplorer;
    $request->waypointSymbol = 'hic';

    $requestSecurity = new PurchaseShipSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->purchaseShip($request, $requestSecurity);

    if ($response->purchaseShip201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\emdash\SpaceTraders\Models\Operations\PurchaseShipRequestBody](../../models/operations/PurchaseShipRequestBody.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [\emdash\SpaceTraders\Models\Operations\PurchaseShipSecurity](../../models/operations/PurchaseShipSecurity.md)       | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |


### Response

**[?\emdash\SpaceTraders\Models\Operations\PurchaseShipResponse](../../models/operations/PurchaseShipResponse.md)**


## refuelShip

Refuel your ship from the local market.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\RefuelShipRequest;
use \emdash\SpaceTraders\Models\Operations\RefuelShipSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new RefuelShipRequest();
    $request->shipSymbol = 'optio';

    $requestSecurity = new RefuelShipSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->refuelShip($request, $requestSecurity);

    if ($response->refuelShip200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\RefuelShipRequest](../../models/operations/RefuelShipRequest.md)   | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `security`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\RefuelShipSecurity](../../models/operations/RefuelShipSecurity.md) | :heavy_check_mark:                                                                                         | The security requirements to use for the request.                                                          |


### Response

**[?\emdash\SpaceTraders\Models\Operations\RefuelShipResponse](../../models/operations/RefuelShipResponse.md)**


## sellCargo

Sell cargo.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\SellCargoRequest;
use \emdash\SpaceTraders\Models\Operations\SellCargoSellCargoRequest;
use \emdash\SpaceTraders\Models\Operations\SellCargoSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new SellCargoRequest();
    $request->requestBody = new SellCargoSellCargoRequest();
    $request->requestBody->symbol = 'totam';
    $request->requestBody->units = 105907;
    $request->shipSymbol = 'commodi';

    $requestSecurity = new SellCargoSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->sellCargo($request, $requestSecurity);

    if ($response->sellCargo201Response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\emdash\SpaceTraders\Models\Operations\SellCargoRequest](../../models/operations/SellCargoRequest.md)   | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `security`                                                                                               | [\emdash\SpaceTraders\Models\Operations\SellCargoSecurity](../../models/operations/SellCargoSecurity.md) | :heavy_check_mark:                                                                                       | The security requirements to use for the request.                                                        |


### Response

**[?\emdash\SpaceTraders\Models\Operations\SellCargoResponse](../../models/operations/SellCargoResponse.md)**


## shipRefine

Attempt to refine the raw materials on your ship. The request will only succeed if your ship is capable of refining at the time of the request.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\ShipRefineRequest;
use \emdash\SpaceTraders\Models\Operations\ShipRefineRequestBody;
use \emdash\SpaceTraders\Models\Operations\ShipRefineRequestBodyProduce;
use \emdash\SpaceTraders\Models\Operations\ShipRefineSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new ShipRefineRequest();
    $request->requestBody = new ShipRefineRequestBody();
    $request->requestBody->produce = ShipRefineRequestBodyProduce::Aluminum;
    $request->shipSymbol = 'modi';

    $requestSecurity = new ShipRefineSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->shipRefine($request, $requestSecurity);

    if ($response->shipRefine200Response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\ShipRefineRequest](../../models/operations/ShipRefineRequest.md)   | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `security`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\ShipRefineSecurity](../../models/operations/ShipRefineSecurity.md) | :heavy_check_mark:                                                                                         | The security requirements to use for the request.                                                          |


### Response

**[?\emdash\SpaceTraders\Models\Operations\ShipRefineResponse](../../models/operations/ShipRefineResponse.md)**


## transferCargo

Transfer cargo between ships.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\TransferCargoRequest;
use \emdash\SpaceTraders\Models\Operations\TransferCargoTransferCargoRequest;
use \emdash\SpaceTraders\Models\Operations\TransferCargoSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new TransferCargoRequest();
    $request->requestBody = new TransferCargoTransferCargoRequest();
    $request->requestBody->shipSymbol = 'qui';
    $request->requestBody->tradeSymbol = 'impedit';
    $request->requestBody->units = 736918;
    $request->shipSymbol = 'esse';

    $requestSecurity = new TransferCargoSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->transferCargo($request, $requestSecurity);

    if ($response->transferCargo200Response !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\emdash\SpaceTraders\Models\Operations\TransferCargoRequest](../../models/operations/TransferCargoRequest.md)   | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |
| `security`                                                                                                       | [\emdash\SpaceTraders\Models\Operations\TransferCargoSecurity](../../models/operations/TransferCargoSecurity.md) | :heavy_check_mark:                                                                                               | The security requirements to use for the request.                                                                |


### Response

**[?\emdash\SpaceTraders\Models\Operations\TransferCargoResponse](../../models/operations/TransferCargoResponse.md)**


## warpShip

Warp your ship to a target destination in another system. Warping will consume the necessary fuel and supplies from the ship's manifest, and will pay out crew wages from the agent's account.

The returned response will detail the route information including the expected time of arrival. Most ship actions are unavailable until the ship has arrived at it's destination.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\WarpShipRequest;
use \emdash\SpaceTraders\Models\Operations\WarpShipRequestBody;
use \emdash\SpaceTraders\Models\Operations\WarpShipSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new WarpShipRequest();
    $request->requestBody = new WarpShipRequestBody();
    $request->requestBody->waypointSymbol = 'ipsum';
    $request->shipSymbol = 'excepturi';

    $requestSecurity = new WarpShipSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->fleet->warpShip($request, $requestSecurity);

    if ($response->warpShip200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\emdash\SpaceTraders\Models\Operations\WarpShipRequest](../../models/operations/WarpShipRequest.md)   | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `security`                                                                                             | [\emdash\SpaceTraders\Models\Operations\WarpShipSecurity](../../models/operations/WarpShipSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |


### Response

**[?\emdash\SpaceTraders\Models\Operations\WarpShipResponse](../../models/operations/WarpShipResponse.md)**

