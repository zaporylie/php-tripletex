<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
        // Add session token received from 01-auth.php.
        'session_token' => '',
    ]);
    $app = new \zaporylie\Tripletex\Tripletex($client);

    // Access order API.
    $orderLines = $app->orderLine();

    // Get order line.
    var_dump($orderLines->getOrderLine());

    $orderLine = new \zaporylie\Tripletex\Model\Order\OrderLine();
    $orderLine->setDescription('test');
    $orderLine->setOrder((new \zaporylie\Tripletex\Model\Order\Order())->setId());
    $orderLine->setUnitPriceIncludingVatCurrency(4);
    $orderLine->setUnitCostCurrency(1);
    $orderLine->setCount(2);
    $orderLine->setVatType((new \zaporylie\Tripletex\Model\Ledger\VatType())->setId());
    $orderLine->setProduct((new \zaporylie\Tripletex\Model\Product\Product())->setId());


    // Create order line.
    var_dump($orderLines->createOrderLine($orderLine));

    // Create multiple order lines.
    var_dump($orderLines->createOrderLines([$orderLine, $orderLine]));
}
catch (Exception $exception) {
    var_dump($exception);
}
