<?php

namespace zaporylie\Tripletex\Resource\Invoice;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Invoice\RequestInvoicePayment;
use zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class InvoicePayment extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::PUT;

    /**
     * @var string
     */
    protected $path = '/invoice/:payment';

    /**
     * @param \zaporylie\Tripletex\Model\Invoice\RequestInvoicePayment $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper
     */
    public function call(RequestInvoicePayment $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
            'invoiceId' => $requestObject->getInvoiceId(),
            'paymentDate' => $requestObject->getPaymentDate()->format('c'),
            'paymentTypeId' => $requestObject->getPaymentTypeId(),
            'paidAmount' => $requestObject->getPaidAmount(),
            ])
        );

        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper',
            'json'
        );

        return $responseObject;
    }
}
