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

use \vitor_test\Acme;
use \vitor_test\Acme\Models\Components;

$sdk = Acme\AcmeGo::builder()->build();

try {
        $request = new Components\UserInput();
    $request->country = 'Benin';
    $request->email = 'Della67@yahoo.com';
    $request->firstname = 'Enrique';
    $request->lastname = 'Ernser';
    $request->nickname = '<value>';
    $request->password = 'TOXx1B29WwlhtAA';;

    $response = $sdk->createUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [\vitor_test\Acme\Models\Components\UserInput](../../Models/Components/UserInput.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?\vitor_test\Acme\Models\Operations\CreateUserv1Response](../../Models/Operations/CreateUserv1Response.md)**


## deleteUserv1

Delete a user by ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme;
use \vitor_test\Acme\Models\Operations;

$sdk = Acme\AcmeGo::builder()->build();

try {
        $request = new Operations\DeleteUserv1Request();
    $request->id = '<id>';;

    $response = $sdk->deleteUserv1($request);

    if ($response->success !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\vitor_test\Acme\Models\Operations\DeleteUserv1Request](../../Models/Operations/DeleteUserv1Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\vitor_test\Acme\Models\Operations\DeleteUserv1Response](../../Models/Operations/DeleteUserv1Response.md)**


## getHealth

Healthcheck

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme;

$sdk = Acme\AcmeGo::builder()->build();

try {
    $response = $sdk->getHealth();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\vitor_test\Acme\Models\Operations\GetHealthResponse](../../Models/Operations/GetHealthResponse.md)**


## getUserv1

Get a user by ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme;
use \vitor_test\Acme\Models\Operations;

$sdk = Acme\AcmeGo::builder()->build();

try {
        $request = new Operations\GetUserv1Request();
    $request->id = '<id>';;

    $response = $sdk->getUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\vitor_test\Acme\Models\Operations\GetUserv1Request](../../Models/Operations/GetUserv1Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\vitor_test\Acme\Models\Operations\GetUserv1Response](../../Models/Operations/GetUserv1Response.md)**


## searchUsersv1

Search users

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme;
use \vitor_test\Acme\Models\Components;

$sdk = Acme\AcmeGo::builder()->build();

try {
        $request = new Components\Filters();
    $request->filters = [
        new Components\Filter(),
    ];
    $request->limit = 230189;
    $request->offset = 260836;;

    $response = $sdk->searchUsersv1($request);

    if ($response->users !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [\vitor_test\Acme\Models\Components\Filters](../../Models/Components/Filters.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?\vitor_test\Acme\Models\Operations\SearchUsersv1Response](../../Models/Operations/SearchUsersv1Response.md)**


## updateUserv1

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \vitor_test\Acme;
use \vitor_test\Acme\Models\Operations;
use \vitor_test\Acme\Models\Components;

$sdk = Acme\AcmeGo::builder()->build();

try {
        $request = new Operations\UpdateUserv1Request();
    $request->user = new Components\UserInput();
    $request->user->country = 'Reunion';
    $request->user->email = 'Anjali_Mann@gmail.com';
    $request->user->firstname = 'Miracle';
    $request->user->lastname = 'Bosco';
    $request->user->nickname = '<value>';
    $request->user->password = '_rsrQvhIQt3Jjvn';
    $request->id = '<id>';;

    $response = $sdk->updateUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\vitor_test\Acme\Models\Operations\UpdateUserv1Request](../../Models/Operations/UpdateUserv1Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\vitor_test\Acme\Models\Operations\UpdateUserv1Response](../../Models/Operations/UpdateUserv1Response.md)**

