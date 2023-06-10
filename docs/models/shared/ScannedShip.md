# ScannedShip

The ship that was scanned. Details include information about the ship that could be detected by the scanner.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `engine`                                                             | [ScannedShipEngine](../../models/shared/ScannedShipEngine.md)        | :heavy_check_mark:                                                   | The engine of the ship.                                              |
| `frame`                                                              | [?ScannedShipFrame](../../models/shared/ScannedShipFrame.md)         | :heavy_minus_sign:                                                   | The frame of the ship.                                               |
| `mounts`                                                             | array<[ScannedShipMounts](../../models/shared/ScannedShipMounts.md)> | :heavy_minus_sign:                                                   | N/A                                                                  |
| `nav`                                                                | [ShipNav](../../models/shared/ShipNav.md)                            | :heavy_check_mark:                                                   | The navigation information of the ship.                              |
| `reactor`                                                            | [?ScannedShipReactor](../../models/shared/ScannedShipReactor.md)     | :heavy_minus_sign:                                                   | The reactor of the ship.                                             |
| `registration`                                                       | [ShipRegistration](../../models/shared/ShipRegistration.md)          | :heavy_check_mark:                                                   | The public registration information of the ship                      |
| `symbol`                                                             | *string*                                                             | :heavy_check_mark:                                                   | The globally unique identifier of the ship.                          |