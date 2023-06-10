# agents

## Overview

Agents

### Available Operations

* [getMyAgent](#getmyagent) - My Agent Details

## getMyAgent

Fetch your agent's details.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetMyAgentSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $requestSecurity = new GetMyAgentSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->agents->getMyAgent($requestSecurity);

    if ($response->getMyAgent200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                 | [\emdash\SpaceTraders\Models\Operations\GetMyAgentSecurity](../../models/operations/GetMyAgentSecurity.md) | :heavy_check_mark:                                                                                         | The security requirements to use for the request.                                                          |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetMyAgentResponse](../../models/operations/GetMyAgentResponse.md)**

