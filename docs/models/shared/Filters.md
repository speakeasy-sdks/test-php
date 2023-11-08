# Filters

An array of filters are used to query requests.


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `filters`                                                                         | array<[\vitor_test\Acme\Models\Components\Filter](../../models/shared/Filter.md)> | :heavy_check_mark:                                                                | A list of filters to apply to the query.                                          |
| `limit`                                                                           | *int*                                                                             | :heavy_check_mark:                                                                | The maximum number of results to return.                                          |
| `offset`                                                                          | *int*                                                                             | :heavy_check_mark:                                                                | The offset to start the query from.                                               |