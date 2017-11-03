<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
      'session_token' => new \zaporylie\Tripletex\Client\Token\RedisTokenStorage(new \Blablacar\Redis\Client())
    ]);
    $app = new \zaporylie\Tripletex\Tripletex($client);

    // Access customer API.
    $customers = $app->customer();

    // Get customer.
//    var_dump($customer = $customers->getCustomer()->getValue());

    // Get customer list.
    var_dump($customers->getList());

    // Update customer.
//    var_dump($customers->updateCustomer(
//      (new \zaporylie\Tripletex\Model\Customer\Customer())
//        ->setId()
//        ->setEmail('test2@example.com'))
//    );

    // Create customer.
//    var_dump($customers->createCustomer(
//      (new \zaporylie\Tripletex\Model\Customer\Customer())
//        ->setName('Test customer')
//        ->setDeliveryAddress(
//          (new \zaporylie\Tripletex\Model\Address\Address())
//          ->setAddressLine1('test address 1')
//          ->setPostalCode(7010)
//          ->setCity('Trondheim')
//        )
//    ));
}
catch (Exception $exception) {
    var_dump($exception);
}
