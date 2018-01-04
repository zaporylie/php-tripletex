<?php

namespace zaporylie\Tripletex\Resource\Order;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Order\RequestInvoiceCreate;
use zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class InvoiceCreate extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::PUT;

    /**
     * @var string
     */
    protected $path = '/order/{id}/:invoice';

    /**
     * @param \zaporylie\Tripletex\Model\Order\RequestInvoiceCreate $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper
     */
    public function call(RequestInvoiceCreate $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath($requestObject->getOrderId()).'?'.http_build_query([
                'orderId' => $requestObject->getOrderId(),
                'invoiceDate' => $requestObject->getInvoiceDate()->format('c'),
                'sendToCustomer' => $requestObject->getSendToCustomer(),
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
