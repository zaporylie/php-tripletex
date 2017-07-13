<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
      // Add session token received from 01-auth.php.
      'session_token' => '',
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
