<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
      'session_token' => new \zaporylie\Tripletex\Client\Token\RedisTokenStorage(new \Blablacar\Redis\Client())
    ]);
    $app = new \zaporylie\Tripletex\Tripletex($client);

    // Access API.
    $inventory = $app->inventory();

    // Get vat type list.
    var_dump($inventory->getInventoryList());
    var_dump($inventory->getInventory(51172));
}
catch (Exception $exception) {
    var_dump($exception);
}
