# vitor-test/acme-go/test

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://github.com/speakeasy-sdks/test-php.git/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/test-php/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
    
</div>

<!-- Start SDK Installation -->
# SDK Installation

## Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/test-php.git"
        }
    ],
    "require": {
        "vitor-test/acme-go/test": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use vitor_test\Acme\AcmeGo;
use vitor_test\Acme\Models\Shared\UserInput;

$sdk = AcmeGo::builder()->build();

try {
    $request = new UserInput();
    $request->country = 'Benin';
    $request->email = 'Della67@yahoo.com';
    $request->firstname = 'Enrique';
    $request->lastname = 'Ernser';
    $request->nickname = 'Missouri Rap';
    $request->password = 'x1B29WwlhtAAexb';

    $response = $sdk->acmeGo->createUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
# Available Resources and Operations

## [AcmeGo SDK](docs/sdks/acmego/README.md)

* [createUserv1](docs/sdks/acmego/README.md#createuserv1) - Create user
* [deleteUserv1](docs/sdks/acmego/README.md#deleteuserv1) - Delete a user by ID
* [getHealth](docs/sdks/acmego/README.md#gethealth) - Healthcheck
* [getUserv1](docs/sdks/acmego/README.md#getuserv1) - Get a user by ID
* [searchUsersv1](docs/sdks/acmego/README.md#searchusersv1) - Search users
* [updateUserv1](docs/sdks/acmego/README.md#updateuserv1)
<!-- End SDK Available Operations -->

<!-- Start Dev Containers -->



<!-- End Dev Containers -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
