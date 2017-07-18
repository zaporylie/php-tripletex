<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient([
        // Add session token received from 01-auth.php.
        'session_token' => '',
    ]);
    $app = new \zaporylie\Tripletex\Tripletex($client);

    // Access order API.
    $invoices = $app->invoice();

    // Get invoice PDF.
    // header('Content-type: application/pdf');
    // header('Content-Disposition: inline');
    // header('Content-Transfer-Encoding: binary');
    // echo $invoices->getInvoicePdf();

    // Get invoice details.
    // var_dump($invoice = $invoices->getInvoice()->getValue());

    // List invoices.
    // var_dump($invoices->getList(new DateTime('-7 days'), new DateTime('+7 days')));

    // Add payment to invoice.
    // var_dump($invoices->updatePayment(, new \DateTime('now'), , $invoice->getAmount()));

    // Get list of available payment types.
    // var_dump($invoices->getPaymentTypeList());

    // Get single payment type.
    // var_dump($invoices->getPaymentType());
}
catch (Exception $exception) {
    var_dump($exception);
}
