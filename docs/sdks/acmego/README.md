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
    $request->country = 'Slovenia';
    $request->email = 'Jaycee_Mante@yahoo.com';
    $request->firstname = 'Rocky';
    $request->lastname = 'Bernier';
    $request->nickname = 'quis';
    $request->password = 'veritatis';

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
    $request->id = 'a05dfc2d-df7c-4c78-8a1b-a928fc816742';

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
    $request->id = 'cb739205-9293-496f-aa75-96eb10faaa23';

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
    ];
    $request->limit = 358152;
    $request->offset = 128926;

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
    $request->userInput->country = 'Saint Kitts and Nevis';
    $request->userInput->email = 'Lenore57@gmail.com';
    $request->userInput->firstname = 'Alisa';
    $request->userInput->lastname = 'Kessler';
    $request->userInput->nickname = 'culpa';
    $request->userInput->password = 'doloribus';
    $request->id = 'f1a3a2fa-9467-4739-a51a-a52c3f5ad019';

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

