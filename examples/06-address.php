<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
        // Add session token received from 01-auth.php.
      'session_token' => '',
    ]);
    $app = new \zaporylie\Tripletex\Tripletex($client);

    // Access order API.
    $addresses = $app->address();

    // Get order.
//    var_dump($addresses->getAddress());

    // Get order list.
//    var_dump($addresses->getList());
}
catch (Exception $exception) {
    var_dump($exception);
}
