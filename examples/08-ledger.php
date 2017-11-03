<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
      'session_token' => new \zaporylie\Tripletex\Client\Token\RedisTokenStorage(new \Blablacar\Redis\Client())
    ]);
    $app = new \zaporylie\Tripletex\Tripletex($client);

    // Access API.
    $ledger = $app->ledger();

    // Get vat type list.
    var_dump($ledger->getVatTypeList());

    // Get vat rate details.
    var_dump($ledger->getVatType(1));
}
catch (Exception $exception) {
    var_dump($exception);
}
