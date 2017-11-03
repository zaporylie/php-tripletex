<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
      'session_token' => new \zaporylie\Tripletex\Client\Token\RedisTokenStorage(new \Blablacar\Redis\Client())
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
