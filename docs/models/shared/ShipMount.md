# ShipMount

A mount is installed on the exterier of a ship.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `deposits`                                                           | array<[ShipMountDeposits](../../models/shared/ShipMountDeposits.md)> | :heavy_minus_sign:                                                   | N/A                                                                  |
| `description`                                                        | *?string*                                                            | :heavy_minus_sign:                                                   | N/A                                                                  |
| `name`                                                               | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  |
| `requirements`                                                       | [ShipRequirements](../../models/shared/ShipRequirements.md)          | :heavy_check_mark:                                                   | The requirements for installation on a ship                          |
| `strength`                                                           | *?int*                                                               | :heavy_minus_sign:                                                   | N/A                                                                  |
| `symbol`                                                             | [ShipMountSymbol](../../models/shared/ShipMountSymbol.md)            | :heavy_check_mark:                                                   | N/A                                                                  |