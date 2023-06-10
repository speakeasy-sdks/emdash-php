# ContractTerms


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `deadline`                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)            | :heavy_check_mark:                                                       | The deadline for the contract.                                           |
| `deliver`                                                                | array<[ContractDeliverGood](../../models/shared/ContractDeliverGood.md)> | :heavy_minus_sign:                                                       | N/A                                                                      |
| `payment`                                                                | [ContractPayment](../../models/shared/ContractPayment.md)                | :heavy_check_mark:                                                       | N/A                                                                      |