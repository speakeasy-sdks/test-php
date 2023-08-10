<!-- Start SDK Example Usage -->


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
    $request->country = 'Malta';
    $request->email = 'Micheal_Sporer@yahoo.com';
    $request->firstname = 'Karley';
    $request->lastname = 'Stamm';
    $request->nickname = 'vel';
    $request->password = 'error';

    $response = $sdk->createUserv1($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->