<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
      'session_token' => new \zaporylie\Tripletex\Client\Token\RedisTokenStorage(new \Blablacar\Redis\Client())
    ]);
    $app = new \zaporylie\Tripletex\Tripletex($client);

    // Access product API.
    $product = $app->product();

    // Get list of products.
    var_dump($product->getList());

    // Get product details - put know id.
    var_dump($product->getProduct(''));
}
catch (Exception $exception) {
    var_dump($exception);
}
