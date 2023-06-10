# ShipyardTransaction


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `agentSymbol`                                                 | *string*                                                      | :heavy_check_mark:                                            | The symbol of the agent that made the transaction.            |
| `price`                                                       | *int*                                                         | :heavy_check_mark:                                            | The price of the transaction.                                 |
| `shipSymbol`                                                  | *string*                                                      | :heavy_check_mark:                                            | The symbol of the ship that was purchased.                    |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | The timestamp of the transaction.                             |
| `waypointSymbol`                                              | *string*                                                      | :heavy_check_mark:                                            | The symbol of the waypoint where the transaction took place.  |