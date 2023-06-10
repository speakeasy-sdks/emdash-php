# Cooldown

A cooldown is a period of time in which a ship cannot perform certain actions.


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `expiration`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php)  | :heavy_minus_sign:                                             | The date and time when the cooldown expires in ISO 8601 format |
| `remainingSeconds`                                             | *int*                                                          | :heavy_check_mark:                                             | The remaining duration of the cooldown in seconds              |
| `shipSymbol`                                                   | *string*                                                       | :heavy_check_mark:                                             | The symbol of the ship that is on cooldown                     |
| `totalSeconds`                                                 | *int*                                                          | :heavy_check_mark:                                             | The total duration of the cooldown in seconds                  |