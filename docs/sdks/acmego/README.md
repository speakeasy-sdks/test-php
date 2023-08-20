# AcmeGo SDK

## Overview

User API for Speakeasy template service: The Rest Template API is an API used for instrucitonal purposes.

### Available Operations

* [createUserv1](#createuserv1) - Create user
* [deleteUserv1](#deleteuserv1) - Delete a user by ID
* [getHealth](#gethealth) - Healthcheck
* [getUserv1](#getuserv1) - Get a user by ID
* [searchUsersv1](#searchusersv1) - Search users
* [updateUserv1](#updateuserv1)

## createUserv1

Create user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme\AcmeGo;
use \vitor_test\Acme\Models\Shared\UserInput;

$sdk = AcmeGo::builder()
    ->build();

try {
    $request = new UserInput();
    $request->country = 'Niger';
    $request->email = 'Hunter.Gulgowski96@yahoo.com';
    $request->firstname = 'Donny';
    $request->lastname = 'Hoppe';
    $request->nickname = 'molestiae';
    $request->password = 'minus';

    $response = $sdk->acmeGo->createUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [\vitor_test\Acme\Models\Shared\UserInput](../../models/shared/UserInput.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |


### Response

**[?\vitor_test\Acme\Models\Operations\CreateUserv1Response](../../models/operations/CreateUserv1Response.md)**


## deleteUserv1

Delete a user by ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme\AcmeGo;
use \vitor_test\Acme\Models\Operations\DeleteUserv1Request;

$sdk = AcmeGo::builder()
    ->build();

try {
    $request = new DeleteUserv1Request();
    $request->id = 'c8796ed1-51a0-45df-82dd-f7cc78ca1ba9';

    $response = $sdk->acmeGo->deleteUserv1($request);

    if ($response->success !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\vitor_test\Acme\Models\Operations\DeleteUserv1Request](../../models/operations/DeleteUserv1Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\vitor_test\Acme\Models\Operations\DeleteUserv1Response](../../models/operations/DeleteUserv1Response.md)**


## getHealth

Healthcheck

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme\AcmeGo;

$sdk = AcmeGo::builder()
    ->build();

try {
    $response = $sdk->acmeGo->getHealth();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\vitor_test\Acme\Models\Operations\GetHealthResponse](../../models/operations/GetHealthResponse.md)**


## getUserv1

Get a user by ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme\AcmeGo;
use \vitor_test\Acme\Models\Operations\GetUserv1Request;

$sdk = AcmeGo::builder()
    ->build();

try {
    $request = new GetUserv1Request();
    $request->id = '28fc8167-42cb-4739-a059-29396fea7596';

    $response = $sdk->acmeGo->getUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\vitor_test\Acme\Models\Operations\GetUserv1Request](../../models/operations/GetUserv1Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\vitor_test\Acme\Models\Operations\GetUserv1Response](../../models/operations/GetUserv1Response.md)**


## searchUsersv1

Search users

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme\AcmeGo;
use \vitor_test\Acme\Models\Shared\Filters;
use \vitor_test\Acme\Models\Shared\Filter;

$sdk = AcmeGo::builder()
    ->build();

try {
    $request = new Filters();
    $request->filters = [
        new Filter(),
        new Filter(),
        new Filter(),
        new Filter(),
    ];
    $request->limit = 697631;
    $request->offset = 99280;

    $response = $sdk->acmeGo->searchUsersv1($request);

    if ($response->users !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [\vitor_test\Acme\Models\Shared\Filters](../../models/shared/Filters.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |


### Response

**[?\vitor_test\Acme\Models\Operations\SearchUsersv1Response](../../models/operations/SearchUsersv1Response.md)**


## updateUserv1

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme\AcmeGo;
use \vitor_test\Acme\Models\Operations\UpdateUserv1Request;
use \vitor_test\Acme\Models\Shared\UserInput;

$sdk = AcmeGo::builder()
    ->build();

try {
    $request = new UpdateUserv1Request();
    $request->userInput = new UserInput();
    $request->userInput->country = 'Azerbaijan';
    $request->userInput->email = 'Manuela.OHara21@hotmail.com';
    $request->userInput->firstname = 'Florian';
    $request->userInput->lastname = 'Champlin';
    $request->userInput->nickname = 'nobis';
    $request->userInput->password = 'enim';
    $request->id = '955907af-f1a3-4a2f-a946-7739251aa52c';

    $response = $sdk->acmeGo->updateUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\vitor_test\Acme\Models\Operations\UpdateUserv1Request](../../models/operations/UpdateUserv1Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\vitor_test\Acme\Models\Operations\UpdateUserv1Response](../../models/operations/UpdateUserv1Response.md)**

