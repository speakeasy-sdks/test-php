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
    $request->country = 'Benin';
    $request->email = 'Della67@yahoo.com';
    $request->firstname = 'Enrique';
    $request->lastname = 'Ernser';
    $request->nickname = 'string';
    $request->password = 'TOXx1B29WwlhtAA';

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
    $request->id = '<ID>';

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
    $request->id = '<ID>';

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
    $request->limit = 230189;
    $request->offset = 260836;

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
    $request->userInput->country = 'Reunion';
    $request->userInput->email = 'Anjali_Mann@gmail.com';
    $request->userInput->firstname = 'Miracle';
    $request->userInput->lastname = 'Bosco';
    $request->userInput->nickname = 'string';
    $request->userInput->password = '_rsrQvhIQt3Jjvn';
    $request->id = '<ID>';

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

