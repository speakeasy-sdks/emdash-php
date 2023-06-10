# contracts

## Overview

Contracts

### Available Operations

* [acceptContract](#acceptcontract) - Accept Contract
* [deliverContract](#delivercontract) - Deliver Contract
* [fulfillContract](#fulfillcontract) - Fulfill Contract
* [getContract](#getcontract) - Get Contract
* [getContracts](#getcontracts) - List Contracts

## acceptContract

Accept a contract.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\AcceptContractRequest;
use \emdash\SpaceTraders\Models\Operations\AcceptContractSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new AcceptContractRequest();
    $request->contractId = 'illum';

    $requestSecurity = new AcceptContractSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->contracts->acceptContract($request, $requestSecurity);

    if ($response->acceptContract200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\emdash\SpaceTraders\Models\Operations\AcceptContractRequest](../../models/operations/AcceptContractRequest.md)   | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |
| `security`                                                                                                         | [\emdash\SpaceTraders\Models\Operations\AcceptContractSecurity](../../models/operations/AcceptContractSecurity.md) | :heavy_check_mark:                                                                                                 | The security requirements to use for the request.                                                                  |


### Response

**[?\emdash\SpaceTraders\Models\Operations\AcceptContractResponse](../../models/operations/AcceptContractResponse.md)**


## deliverContract

Deliver cargo on a given contract.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\DeliverContractRequest;
use \emdash\SpaceTraders\Models\Operations\DeliverContractRequestBody;
use \emdash\SpaceTraders\Models\Operations\DeliverContractSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new DeliverContractRequest();
    $request->requestBody = new DeliverContractRequestBody();
    $request->requestBody->shipSymbol = 'vel';
    $request->requestBody->tradeSymbol = 'error';
    $request->requestBody->units = 645894;
    $request->contractId = 'suscipit';

    $requestSecurity = new DeliverContractSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->contracts->deliverContract($request, $requestSecurity);

    if ($response->deliverContract200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\emdash\SpaceTraders\Models\Operations\DeliverContractRequest](../../models/operations/DeliverContractRequest.md)   | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [\emdash\SpaceTraders\Models\Operations\DeliverContractSecurity](../../models/operations/DeliverContractSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |


### Response

**[?\emdash\SpaceTraders\Models\Operations\DeliverContractResponse](../../models/operations/DeliverContractResponse.md)**


## fulfillContract

Fulfill a contract

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\FulfillContractRequest;
use \emdash\SpaceTraders\Models\Operations\FulfillContractSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new FulfillContractRequest();
    $request->contractId = 'iure';

    $requestSecurity = new FulfillContractSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->contracts->fulfillContract($request, $requestSecurity);

    if ($response->fulfillContract200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\emdash\SpaceTraders\Models\Operations\FulfillContractRequest](../../models/operations/FulfillContractRequest.md)   | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [\emdash\SpaceTraders\Models\Operations\FulfillContractSecurity](../../models/operations/FulfillContractSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |


### Response

**[?\emdash\SpaceTraders\Models\Operations\FulfillContractResponse](../../models/operations/FulfillContractResponse.md)**


## getContract

Get the details of a contract by ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetContractRequest;
use \emdash\SpaceTraders\Models\Operations\GetContractSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetContractRequest();
    $request->contractId = 'magnam';

    $requestSecurity = new GetContractSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->contracts->getContract($request, $requestSecurity);

    if ($response->getContract200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\emdash\SpaceTraders\Models\Operations\GetContractRequest](../../models/operations/GetContractRequest.md)   | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `security`                                                                                                   | [\emdash\SpaceTraders\Models\Operations\GetContractSecurity](../../models/operations/GetContractSecurity.md) | :heavy_check_mark:                                                                                           | The security requirements to use for the request.                                                            |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetContractResponse](../../models/operations/GetContractResponse.md)**


## getContracts

List all of your contracts.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \emdash\SpaceTraders\SpaceTraders;
use \emdash\SpaceTraders\Models\Shared\Security;
use \emdash\SpaceTraders\Models\Operations\GetContractsRequest;
use \emdash\SpaceTraders\Models\Operations\GetContractsSecurity;

$sdk = SpaceTraders::builder()
    ->build();

try {
    $request = new GetContractsRequest();
    $request->limit = 891773;
    $request->page = 56713;

    $requestSecurity = new GetContractsSecurity();
    $requestSecurity->agentToken = '';

    $response = $sdk->contracts->getContracts($request, $requestSecurity);

    if ($response->getContracts200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\emdash\SpaceTraders\Models\Operations\GetContractsRequest](../../models/operations/GetContractsRequest.md)   | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `security`                                                                                                     | [\emdash\SpaceTraders\Models\Operations\GetContractsSecurity](../../models/operations/GetContractsSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |


### Response

**[?\emdash\SpaceTraders\Models\Operations\GetContractsResponse](../../models/operations/GetContractsResponse.md)**

