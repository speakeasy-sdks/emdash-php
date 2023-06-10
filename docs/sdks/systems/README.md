# systems

## Overview

Systems

### Available Operations

* [getJumpGate](#getjumpgate) - Get Jump Gate
* [getMarket](#getmarket) - Get Market
* [getShipyard](#getshipyard) - Get Shipyard
* [getSystem](#getsystem) - Get System
* [getSystemWaypoints](#getsystemwaypoints) - List Waypoints
* [getSystems](#getsystems) - List Systems
* [getWaypoint](#getwaypoint) - Get Waypoint

## getJumpGate

Get jump gate details for a waypoint.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetJumpGateRequest;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetJumpGateRequest();
    $request->systemSymbol = 'aspernatur';
    $request->waypointSymbol = 'perferendis';

    $response = $sdk->systems->getJumpGate($request);

    if ($response->getJumpGate200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetJumpGateRequest](../../models/operations/GetJumpGateRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetJumpGateResponse](../../models/operations/GetJumpGateResponse.md)**


## getMarket

Retrieve imports, exports and exchange data from a marketplace. Imports can be sold, exports can be purchased, and exchange goods can be purchased or sold. Send a ship to the waypoint to access trade good prices and recent transactions.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetMarketRequest;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetMarketRequest();
    $request->systemSymbol = 'ad';
    $request->waypointSymbol = 'natus';

    $response = $sdk->systems->getMarket($request);

    if ($response->getMarket200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\emdash\SpaceTraders\Models\Operations\GetMarketRequest](../../models/operations/GetMarketRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetMarketResponse](../../models/operations/GetMarketResponse.md)**


## getShipyard

Get the shipyard for a waypoint. Send a ship to the waypoint to access ships that are currently available for purchase and recent transactions.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetShipyardRequest;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetShipyardRequest();
    $request->systemSymbol = 'sed';
    $request->waypointSymbol = 'iste';

    $response = $sdk->systems->getShipyard($request);

    if ($response->getShipyard200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetShipyardRequest](../../models/operations/GetShipyardRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetShipyardResponse](../../models/operations/GetShipyardResponse.md)**


## getSystem

Get the details of a system.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetSystemRequest;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetSystemRequest();
    $request->systemSymbol = 'dolor';

    $response = $sdk->systems->getSystem($request);

    if ($response->getSystem200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\emdash\SpaceTraders\Models\Operations\GetSystemRequest](../../models/operations/GetSystemRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetSystemResponse](../../models/operations/GetSystemResponse.md)**


## getSystemWaypoints

Fetch all of the waypoints for a given system. System must be charted or a ship must be present to return waypoint details.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetSystemWaypointsRequest;
use \emdash\SpaceTraders\Models\Operations\GetSystemWaypointsSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetSystemWaypointsRequest();
    $request->limit = 616934;
    $request->page = 386489;
    $request->systemSymbol = 'hic';

    $requestSecurity = new GetSystemWaypointsSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->systems->getSystemWaypoints($request, $requestSecurity);

    if ($response->getSystemWaypoints200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetSystemWaypointsRequest](../../models/operations/GetSystemWaypointsRequest.md)   | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `security`                                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetSystemWaypointsSecurity](../../models/operations/GetSystemWaypointsSecurity.md) | :heavy_check_mark:                                                                                                         | The security requirements to use for the request.                                                                          |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetSystemWaypointsResponse](../../models/operations/GetSystemWaypointsResponse.md)**


## getSystems

Return a list of all systems.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetSystemsRequest;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetSystemsRequest();
    $request->limit = 902599;
    $request->page = 681820;

    $response = $sdk->systems->getSystems($request);

    if ($response->getSystems200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\emdash\SpaceTraders\Models\Operations\GetSystemsRequest](../../models/operations/GetSystemsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetSystemsResponse](../../models/operations/GetSystemsResponse.md)**


## getWaypoint

View the details of a waypoint.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetWaypointRequest;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetWaypointRequest();
    $request->systemSymbol = 'in';
    $request->waypointSymbol = 'corporis';

    $response = $sdk->systems->getWaypoint($request);

    if ($response->getWaypoint200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetWaypointRequest](../../models/operations/GetWaypointRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetWaypointResponse](../../models/operations/GetWaypointResponse.md)**

