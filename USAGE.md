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
    $request->nickname = 'panel';
    $request->password = 'OXx1B29WwlhtAAe';

    $response = $sdk->acmeGo->createUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->