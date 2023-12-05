<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use vitor_test\Acme;
use vitor_test\Acme\Models\Components;

$sdk = Acme\AcmeGo::builder()->build();

try {
    $request = new Components\UserInput();
    $request->country = 'Benin';
    $request->email = 'Della67@yahoo.com';
    $request->firstname = 'Enrique';
    $request->lastname = 'Ernser';
    $request->nickname = 'string';
    $request->password = 'TOXx1B29WwlhtAA';

    $response = $sdk->createUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->